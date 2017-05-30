<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ResetFormRequest;
use App\Mail\LinkMessageCreated;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function forget()
    {
        return view('users.email');
    }

    public function send_link(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string|max:255'
        ]);
        $user = User::whereEmail($request->email)->first();

        if($user)
        {
            $updated = $user->update([
                'reset_token' => str_random(60),
                'reset_at' => date('Y-m-d H:i:s')
            ]);
            if($updated)
            {
                $user = User::whereEmail($user->email)->first();
                $link = config('app.url').'/reset-id/'.$user->id.'/reset-token/'.$user->reset_token;
                $mailable = new LinkMessageCreated($link);
                Mail::to($request->email)->send($mailable);
                flash('Un mail de réinitialisation de votre mot de passe vous a été envoyé :)');
                return redirect()->route('welcome');
            }
        }
        else
        {
            flash("L'adresse email n'est pas le bon","danger");
            return redirect()->route('forget_path');
        }
    }


    public function reset_link($reset_id, $reset_token)
    {
        $user = User::where([
            'id' => $reset_id,
            'reset_token' => $reset_token
        ])->first(); 
        if($user)
        {
            $user->update([
                'reset_token' => null,
                'reset_at' => null
            ]);
            return redirect()->route('recovery', compact('user'));
        }
        else
        {
            flash('Jeton de sécurité invalide !!!','danger');
            return redirect()->route('welcome');
        }
    }

    public function recovery(User $user)
    {
        return view('users.recovery', compact('user'));
    }


    public function eff_recovery(ResetFormRequest $request, User $user)
    {
        $user->update([
            'password' => password_hash($request->password, PASSWORD_BCRYPT)
        ]);

        flash('Votre mot de passe a bien été réinitialisé :)');

        return redirect()->route('login_path');
    }
}
