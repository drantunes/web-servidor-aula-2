  <h1>Notas da turma</h1>
  <table border="1">
      <tr>
          <td>Aluno</td>
          <td>Nota 1</td>
          <td>Nota 2</td>
          <td>Nota 3</td>
      </tr>
      <?php foreach ($boletim as $aluno => $notas) : ?>
          <tr>
              <td><?= $aluno ?></td>
              <td><?= $notas['p1'] ?></td>
              <td><?= $notas['p2'] ?></td>
              <td><?= $notas['p3'] ?></td>
          </tr>
      <?php endforeach; ?>
  </table>