$('.ui.form').form({
    fields: {
      depan: {
        identifier: 'fs_nama_depan',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter nama depan'
          }
        ]
      },
      belakang: {
        identifier: 'fs_nama_belakang',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter nama belakang'
          }
        ]
      },
      handphone: {
        identifier: 'fs_no_handphone',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter handphone'
          }
        ]
      },
      email: {
        identifier: 'fs_email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter email'
          }
        ]
      }
    }
  });