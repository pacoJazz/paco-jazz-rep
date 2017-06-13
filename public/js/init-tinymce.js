tinymce.init({
	selector: 'textarea#content',
	theme: 'modern',
	height:400,
	width: '100%',



	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak nonbreaking",
		"searchreplace wordcount visualblocks visualchars insertdatetime media table emoticons",
		"contextmenu directionality paste textcolor code codesample"
	],

	toolbar1: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | indent outdent',
	toolbar2: 'link unlink anchor | image media | forecolor backcolor | print preview code | caption nonbreaking',

	image_caption: true,
	image_advtab: true,

	external_filemanager_path: "/filemanager",

	filemanager_title: "Chargement de médias",

	external_plugins: { "filemanager": "/filemanager/plugin.min.js"},

	visualblocks_default_state: true,

	style_formats_autohide: true,
	style_formats_merge: true,


});