<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<table>
<?php 
        $jsonGelenVeri=file_get_contents("https://.json");
        $veri=json_decode($jsonGelenVeri,1);
?>
        <!-- cellspacing=0,id="dovizListesi" -->
        <tr>
            <th>Para Birimi</th>
            <th>Alış</th>
            <th>Satış</th>
        </tr>
        <tr>
            <td>USD</td>
            <td><?=$veri["ABD DOLARI"]["Alış"]?></td>
            <td><?=$veri["ABD DOLARI"]["Satış"]?></td>
        </tr>
        <tr>
            <td>EURO</td>
            <td><?=$veri["EURO"]["Alış"]?></td>
            <td><?=$veri["EURO"]["Satış"]?></td>
        </tr>
        <tr>
            <td>STERLİN</td>
            <td><?=$veri["İNGİLİZ STERLİNİ"]["Alış"]?></td>
            <td><?=$veri["İNGİLİZ STERLİNİ"]["Satış"]?></td>
        </tr>
         <tr>
            <td>AVUSTRALYA DOLARI</td>
            <td><?=$veri["AVUSTRALYA DOLARI"]["Alış"]?></td>
            <td><?=$veri["AVUSTRALYA DOLARI"]["Satış"]?></td>
        </tr>
        <tr>
            <td>Çeyrek Altın</td>
            <td><?=$veri["Çeyrek Altın"]["Alış"]?></td>
            <td><?=$veri["Çeyrek Altın"]["Satış"]?></td>
        </tr>
        <tr>
            <td>Gold2</td>
            <td><?=$veri["Gram Altın"]["Alış"]?></td>
            <td><?=$veri["Gram Altın"]["Satış"]?></td>
        </tr>
</table>