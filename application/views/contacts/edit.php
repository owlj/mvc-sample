<style type="text/css">
   #form_div{
    background-color: #DDDDDD;
    padding: 20px;
  }
</style>
<div id="form_div">
  <form action="<?php echo URL; ?>contacts/update" method="POST">
    <header><strong>Add Song Form</strong></header>
    <section>
      <input type="hidden" name="id" value="<?=$contact->id?>">
      <label>name</label><input type="text" name="name" value="<?=$contact->name?>" required />
      <label>email</label><input type="email" name="email" value="<?=$contact->email?>" required />
      <input type="submit" name="submit" value="Submit" />
    </section>
  </form>
</div>