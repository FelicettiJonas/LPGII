<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Usuários</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Role</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['users'] as $user) { ?>
            <tr>
              <td><?= $user['id'] ?></td>
              <td><?= $user['name'] ?></td>
              <td><?php foreach ($data['roles'] as $role){
                  if ($role['id'] == $user['id_roles']) {
                    echo $role['name'];
                  }
              }
                ?></td>
              <td><a href="http://localhost:8080/user/show/<?= $user['id'] ?>"><img src="/assets/img/edit.png" alt="Editar" height="20px"></a></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
