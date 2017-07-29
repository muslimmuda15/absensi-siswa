<script>
function set()
{
$(function() {
  var doc = new jsPDF('p', 'pt', 'a4');
  
  var tbl = $('#example').clone();
  tbl.find('tfoot').remove();
  
  /********
    1 -->  No
    2 -->  Id
    3 -->  Name
    4 -->  Class
  *****/
  tbl.find('tr th:nth-child(1), tr td:nth-child(1)').remove();

  var res = doc.autoTableHtmlToJson(tbl.get(0));
  
  
  doc.autoTable(res.columns, res.data, {
    startY: 60,
    styles: {
      overflow: 'linebreak',
      fontSize: 8,
      columnWidth: 'wrap'
    },
    columnStyles: {
      1: {columnWidth: 'auto'}
    },
    createdCell: function (cell, data) {
      var a = this;
    }
  });
  doc.output('dataurlnewwindow');
});
}
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>


    <table id="example"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
      <thead>
       <tr>
        <th>No</th>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
       </tr>
      </thead>
      <tbody>
        <tr>
           <td>1</td><td>06.2010</td><td>Mike Adams</td><td>class 1</td>
        </tr>
        <tr>
           <td>2</td><td>06.2011</td><td>John Fox</td><td>class 2</td>
        </tr>
        <tr>
           <td>3</td><td>06.2012</td><td>Andrew Fisher</td><td>class 3</td>
        </tr>
      </tbody>
      <tfoot>
        <th>No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
      </tfoot>
     </table>

<button onclick="set()">coba</button>


<br>

<select class="form-control" name="class" id="class" onchange="" value="--">
    <option>--</option>
    <option>X TKJ 1</option>
    <option>X TKJ 2</option>
    <option>XI TKJ 1</option>
    <option>XI TKJ 2</option>
</select>
<input type="text" class="form-control" name="name" id="name" list="checkName" autocomplete="off" required>
<datalist id="checkName">
    <?php
        include 'Data/connect.php';
       $sql_siswa = "SELECT nama,kelas from siswa order by nama;";
       $result = $conn->query($sql_siswa);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<option value=\"".$row["nama"]."\">";
            }
        }
    ?>
</datalist>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<select project="myclass" class="form-control" name="myclass" id="myclass" onchange="" value="--">
    <option value="">--</option>
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

<input type="text" name="name" id="name" placeholder="Student Name" list="checkName" autocomplete="off" required>
<datalist id="checkName">
    <?php
    include 'Data/connect.php';
    $sql_siswa = "SELECT nama,kelas from siswa order by nama;";
    $result = $conn->query($sql_siswa);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<option value=\"".$row["nama"]."\">".$row["kelas"]."</option>";
        }
    } ?>
</datalist>

<script>
    var options = $('#checkName option').clone();

$('#myclass').change(function(){
  var val = $(this).val(),
      filterOptions = val == '' ? options : options.filter('[value="' + val + '"]');
  $('#checkName').html('').append(filterOptions);
});
</script>