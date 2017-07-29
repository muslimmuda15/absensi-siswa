<form method="post">
<textarea name="input"></textarea>
<button type="submit" name="button">button</button>
<table class="table table-bordered" id="tableAll">
<thead>
<tr>
    <th class="col-md-1">name</th>
</tr>
</thead>
<tbody>
    <tr>
        <?php
            if(isset($_POST['button']))
            {
                echo "<td>".$_POST["input"]."</td>";
            }
        ?>
    </tr>
</tbody>
</table>
<br><br><br><br><br>
<table class="table table-bordered" id="tableAll">
<thead>
<tr>
    <th class="col-md-1">name</th>
</tr>
</thead>
<tbody>
    <tr>
        <select>
            <option>saya</option>
            <option>coba</option>
        </select>
    </tr>
</tbody>
</table>
</form>

<style>
    td { white-space:pre }
</style>