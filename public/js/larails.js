jQuery(function($) {
	var larails = {
		tokenInputName : '_token',
		methodInputName: '_method',
		metaNameToken  : 'csrf-token',

		initialize: function()
		{
			$('a[data-method]').on('click', this.handleMethod);
		},

		handleMethod: function(e)
		{
			e.preventDefault();

			var link = $(this),
				httpVerb = link.data('method').toUpperCase(),
				confirmMessage = link.data('confirm'),
				form;

			if($.inArray(httpVerb, ['PUT','PATCH','DELETE']) === -1)
			{
				return;
			}

			if(confirmMessage)
			{
				if(confirm(confirmMessage))
				{
					form = larails.createForm(link);
					form.submit();
				}
			}
			else
			{
				form = larails.createForm(link);
				form.submit();
			}
		},

		createForm: function(link)
		{
			var form = $('<form>', {
				'method':'POST',
				'action':link.prop('href')
			});

			var token = $('<input>', {
				'type':'hidden',
				'name':larails.tokenInputName,
				'value':$('meta[name=' + larails.metaNameToken + ']').prop('content')
			});

			var method = $('<input>', {
				'type':'hidden',
				'name':larails.methodInputName,
				'value':link.data('method').toUpperCase()
			});

			return form.append(token, method).appendTo('body');
		}
	}

	larails.initialize();
});