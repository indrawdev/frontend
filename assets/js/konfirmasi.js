$('select.dropdown').dropdown();

$('.ui.form').form({
    fields: {
      order: {
        identifier: 'fs_order',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter order number'
          }
        ]
      },
      bayar: {
        identifier: 'fs_bayar',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please select a bank'
          }
        ]
      },
      nominal: {
        identifier: 'fn_nominal',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter nominal'
          }
        ]
      },
      nama: {
        identifier: 'fs_nama_transfer',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter nama'
          }
        ]
      }
    }
  });