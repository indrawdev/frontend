$('select.dropdown').dropdown();

$('.ui.form').form({
    fields: {
      lapangan: {
        identifier: 'fs_kode_lapangan',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter lapangan'
          }
        ]
      },
      tarif: {
        identifier: 'fs_tarif',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please select tarif'
          }
        ]
      }
    }
  });