

tinymce.init({
	selector:'textarea',
	height: 500,
  menubar: false,
  plugins: [
    'code'
  ],
  toolbar: 'undo redo | formatselect | ' +
  ' bold italic underline forecolor backcolor | alignleft aligncenter ' +
  ' alignright alignjustify | bullist numlist outdent indent |' +
  ' removeformat | code',
  content_css: [
    'public/css/font.css',
    'public/css/styleMce.css'
  ]
});