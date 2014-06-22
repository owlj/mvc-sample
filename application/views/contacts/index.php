<style type="text/css">
   #form_div{
    background-color: #DDDDDD;
    padding: 20px;
  }
</style>
<div id="form_div">
  <form action="<?php echo URL; ?>contacts/create" method="POST">
    <header><strong>Add Song Form</strong></header>
    <section>
      <label>name</label><input type="text" name="name" value="" required />
      <label>email</label><input type="email" name="email" value="" required />
      <input type="submit" name="submit" value="Submit" />
    </section>
  </form>
</div>

<style type="text/css">
  #list_items{
    background-color: #AAAAAA;
    margin-top: 20px;
    padding: 20px;
  }
  a.items{
    color: #34495e;
  }
  a.items:hover{
    color: #0c0e00;
  }
</style>
<div id="list_items">
  <table border="1">
    <thead style="font-weight: bold;">
      <tr style="text-align: center">
        <td>Id</td><td>name</td><td>email</td><td>action</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $contact) { ?>
      <tr>
        <td><?php if (isset($contact->id)) echo $contact->id; ?></td>
        <td><?php if (isset($contact->name)) echo $contact->name; ?></td>
        <td><?php if (isset($contact->email)) echo $contact->email; ?></td>
        <td>
          <a class="items" href="<?php echo URL . 'contacts/edit/' . $contact->id; ?>">edit</a> |
          <a class="items" href="<?php echo URL . 'contacts/delete/' . $contact->id; ?>">delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>