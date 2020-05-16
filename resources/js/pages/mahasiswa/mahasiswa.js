const arrDataToOptionItem = require('../../comon-helper').arrDataToOptionItem;

$( document ).ready(function() {

    // Form Update Alamat
    $('body').on('change', '#formUpdateAlamat #selectProvinsi', function() {
        let provinsiId = $(this).val();
        axios.get(base_url + '/lookup/kota/' + ( provinsiId != '' ? '?provinsiId='+provinsiId : '' ))
            .then(function (response) {
                let arrData = response.data;
                let options = arrData.reduce(arrDataToOptionItem, '<option value="">- Pilih Kota -</option>');
                $('#selectKota').html(options);
            })
            .catch(function (e) {
                console.log(e);
            });
    });

});