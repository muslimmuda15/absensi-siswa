<!DOCTYPE html>
<?php
    include 'mpdf/mpdf.php';
?>
<html>
    <body>
        <div class="form-control" id="inputan" style="">
  <!--<form method="POST" action="">-->
  <form class="form" id="formUser">
  <!--<div class="form-group">-->
	<label for="kelas">Kelas:</label>
            <!--<form method="post">-->
                <select project="kelas" class="form-control" name="kelas" id="kelas" onchange="//ceknama(this)" value="--">
                    <option>--</option>
                    <option>X TKJ 1</option>
                    <option>X TKJ 2</option>
                    <option>X MM 1</option>
                    <option>X MM 2</option>
                    <option>XI TKJ 1</option>
                    <option>XI TKJ 2</option>
                    <option>XI MM 1</option>
                    <option>XI MM 2</option>
                    <option>XII TKJ 1</option>
                    <option>XII TKJ 2</option>
                    <option>XII MM 1</option>
                    <option>XII MM 2</option>
                    <option>XII ANM</option>
                </select>
            <!--<button type="cari" name="cari" class="glyphicon glyphicon-search btn btn-default btn-info">Search</button>-->
            <!--</div>-->


            <div class="form-group">
            <label for="siswa">Nama Siswa</label>
                <div class="input-group"><!-- /cari siswa -->

                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Siswa" list="ceknama" value="Rachmad" autocomplete="off" required>
                    
            </div><!-- /cari siswa -->
            </div>

            <div>
            Tanggal :

            <input type="text" name="tanggal" id="tanggal" value="12-8-2016" required/>

            </div>
            <div class="form-group">
            <label for="keperluan">Keperluan :</label><br>
            <textarea name="keperluan" id="keperluan" rows="4" cols="75.5" placeholder="Apa Keperluan Anda!!...">mau keluar kelas</textarea>
            </div>
            <div class="form-group">
            <label for="piket">Guru Piket :</label>
            <input type="text" class="form-control" value="cakmad" name="guru" id="guru" placeholder="Guru Piket" list="cekguru" autocomplete="off" required>
            
            </div>
         </form>
     </div>

    <div>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="mpdf()" >Submit Data</button>
      </div>

<div align="center" id="suratIzinKeluar2">
    <table id="suratIzinKeluar" width="423" height="468" border="2" cellpadding="2">
    <tr>
      <td height="48" colspan="3"><div align="center">
        <h3>SMK MUHAMMADIYAH 2 SURABAYA</h3>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">SURAT IZIN</div></td>
    </tr>
    <tr>
      <td height="47" colspan="3"><div>Menerangkan Bahwa siswa di bawah ini :</div></td>
    </tr>
    <tr>
        <td height="29" colspan="3">Nama : <div style="display: inline" id="namasiswa">nama</div></td>
    </tr>
    <tr>
      <td height="30" colspan="3">Kelas : <div style="display: inline" id="kelassiswa">kelas</div></td>
    </tr>
    <tr>
      <td height="31" colspan="3">Tanggal : <div style="display: inline" id="tanggalsiswa">tanggal</div></td>
    </tr>
    <tr>
      <td height="32" colspan="3"><div align="justify">Keperluan : <div style="display: inline" id="keperluansiswa">keperluan</div></div></td>
    </tr>
    <tr>
      <td height="10" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">Guru Kelas </div></td>
      <td colspan="2"><div align="center">Guru Piket</div></td>
    </tr>
    <tr>
      <td width="230" height="50">&nbsp;</td>
      <td width="182" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="51"><div align="center">(..........................................)</div></td>
      <td colspan="2"><div align="center">(...........................................)</div></td>
    </tr>
  </table>
</div>
    </body>
</html>

<script src="dist/jspdf.min.js"></script>
<script src="dist/jspdf.plugin.autotable.js"></script>
<script src="lib/jquery.min.js"></script>

<script>
        function printInput()
        {
            var doc = new jsPDF('p','pt','b6');
            doc.fromHTML($("#inputan").get(0), 10, 10, {});
            doc.output('dataurlnewwindow');
        }
        
        function printForm()
        {
            
        }
        
        function output()
        {
            $("#namasiswa").html(document.getElementById("nama").value);
            $("#kelassiswa").html(document.getElementById("kelas").value);
            $("#tanggalsiswa").html(document.getElementById("tanggal").value);
            $("#keperluansiswa").html(document.getElementById("keperluan").value);
            var surat = $('#suratIzinKeluar').clone();
            
            var doc = new jsPDF('p','pt','b6');
            var elem = document.getElementById("suratIzinKeluar");
            var res = doc.autoTableHtmlToJson(elem);
            doc.autoTable(res.columns, res.data, {theme:'plain'});
            
//            doc.fromHTML(surat.html(), 10, 10, {});
//            var res = doc.autoTableHtmlToJson(surat.get(0));
//
//
//            doc.autoTable(res.columns, res.data, {
//              startY: 60,
//              styles: {
//                overflow: 'linebreak',
//                fontSize: 8,
//                columnWidth: 'wrap'
//              },
//              columnStyles: {
//                1: {columnWidth: 'auto'}
//              },
//              createdCell: function (cell, data) {
//                var a = this;
//              },
//              theme: 'plain'
//            });
            doc.output('dataurlnewwindow');
        }
        
        function mpdf()
        {
            var a=$("#suratIzinKeluar2").html();
            $.post("demo2.php", { data: a })
                    .done(function(data){
               window.open("demo3.php", "_black");         
            });
            location.reload();
        }
</script>