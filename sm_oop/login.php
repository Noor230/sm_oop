
 <div class=" log1"> 


  <div class="login"> 
    <form class="form-login" method="POST" action="/authenticate">
      <h2> Login page </h2> 
      <div class="mt-1">  <!--Form  takes user to another page to process information -->
        
      <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
        
         <div> <?= $_SESSION['error'] ?>  </div>
        <?php
            $_SESSION['error'] = null;
        endif; ?>
    
  
        <div >
    <div class="line1 ">
            <label for="admin-username" class="label-login" >User:</label>
            <input id="admin-username" type="text" placeholder=" username " name="username">
            
        </div>

        <div class="line2 ">
            <label for="password">pass</label>
            <input id="password" type="password"  placeholder=" password "   name="password">
        </div>

      
        <div>
         <label class="check-labelre"  for="remember-me">Remember Me</label>
        <input id="remember-me" type="checkbox" class="remeber-check"name="Remember Me" style="display:inline-block; width: fit-content " >
            
        </div>
    
        <!-- Submit button-->  <!-- <input type="submit" value="submit"> -->
        <button type="submit" class=""> Login</button>
    </div>
    </form>
    </main>
   
</div>