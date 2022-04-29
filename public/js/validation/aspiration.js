$( "#form-aspirasi" ).validate({
  rules: {
    Isi: {
      required: true
    }
  },
  messages: {
      Isi: {
          required: 'The aspiration field is required.'
      }
  }
});