$(document).ready(function () 
{
    

        $('#tambahKomoditi').click(function(e){
          e.preventDefault();
          var komoditi_kode = $("#komoditi_kode").html();
          var komoditi_nama = $("#komoditi_nama").val();
          var komoditi_jenis = $("#komoditi_jenis").val();
          var komoditi_asal = $("#komoditi_asal").val();
          var komoditi_bentuk = $("#komoditi_bentuk").val();
          var satuan = $("#satuan").val();
               $.ajax({
                 url: $(this).attr("href"),
                 type:'POST',
                 data:{'komoditi_kode':$("#komoditi_kode").html(),'komoditi_nama':$("#komoditi_nama").val(),
               'komoditi_jenis':$("#komoditi_jenis").val(), 'komoditi_asal':$("#komoditi_asal").val(),
               'komoditi_bentuk':$("#komoditi_bentuk").val(),'satuan':$("#satuan").val()},
                 success: function(results){
                    alert('Data Komoditi Berhasil Ditambah ! ');
                    location.reload();
                  } 
                });
        });

        $('#editKomoditi').click(function(e){
          e.preventDefault();
          var komoditi_kode = $("#komoditi_kode").html();
          var komoditi_nama = $("#komoditi_nama").val();
          var komoditi_jenis = $("#komoditi_jenis").val();
          var komoditi_asal = $("#komoditi_asal").val();
          var komoditi_bentuk = $("#komoditi_bentuk").val();
          var satuan = $("#satuan").val();         
               $.ajax({
                 url: $(this).attr("href"),
                 type:'POST',
                 data:{'komoditi_kode':$("#komoditi_kode").html(),'komoditi_nama':$("#komoditi_nama").val(),
                        'komoditi_jenis':$("#komoditi_jenis").val(),'komoditi_asal':$("#komoditi_asal").val(),
                        'komoditi_bentuk':$("#komoditi_bentuk").val(),'satuan':$("#satuan").val()},
                 success:function(results)
                 {
                    alert('Data Komoditi Berhasil Diperbarui ! ');
                    location.reload();
                 }
                });
        });


         
    
});



