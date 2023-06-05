<form action="submit" method="POST">
  @csrf
  <label for="name">Name</label><br>
  <input type="text" name="name">
  <button>Send</button> 
</form>