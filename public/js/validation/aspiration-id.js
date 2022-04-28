$( "#form-aspirasi" ).validate({
  rules: {
    Isi: {
      required: true
    }
  },
  messages: {
      Isi: {
          required: 'Kolom aspirasi harus diisi.'
      }
  }
});