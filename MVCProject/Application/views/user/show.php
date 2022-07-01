<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">


        <form action="/user/save/<?= $data['user'][0]['id'] ?>" method="post">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['user'] as $user) { ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><select name="role" id="role">
                  <?php foreach ($data['role'] as $role) { ?>
                    <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
                  <?php }?>
                </select></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
          <button type="submit">Salvar</button>
          <?php
          echo $app;
          ?>
        </form>
      </div>
    </div>
  </div>
</main>
