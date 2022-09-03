<!DOCTYPE htm>
<htm lang="en">
  <header>
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 12px;
      }
      table {
        width: 100%;
        border: 1px solid black;
      }
      tr {
        border: 1px solid black;
      }
    </style>
  </header>
  <body>
    <table>
      <thead>
        <tr>
        <?php foreach ($this->sheet[0] as $header): ?>
          <th><?= $header ?></th>
        <?php endforeach ?>
        </th>
      </thead>
      <tbody>
        <?php for ($x = 1; $x <= count($this->sheet) -1; $x++): ?>
        <tr>
          <?php foreach ($this->sheet[$x] as $column): ?>
          <td><?= $column ?></td>
          <?php endforeach ?>
        </tr>
        <?php endfor ?>
      </tbody>
    </table>
  </body>
</htm>
