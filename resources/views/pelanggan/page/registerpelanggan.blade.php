<!-- Register form -->
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: rgb(255, 255, 255);
}

.container {
  width: 100%;
  display: flex;
  max-width: 850px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 40px 35px rgba(0, 0, 0, 0.1);
}

.login {
  width: 400px;
}

form {
  width: 250px;
  margin: 60px auto;
}

h1 {
  margin: 20px;
  text-align: center;
  font-weight: bolder;
  text-transform: uppercase;
}

hr {
  border-top: 2px solid rgb(28, 28, 29);
}

p {
  text-align: center;
  margin: 10px;
}

.right img {
  width: 450px;
  height: 100%;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
}

form label {
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 5px;
}

input {
  width: 100%;
  margin: 2px;
  border: none;
  outline: none;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid gray;
}

a{
    display: inline-block;
  padding: 0.5rem;
  font-size: 1rem;
  color: #fff;
  background-color: black;
  border-radius: 0.5rem;
  box-shadow: 1px 1px 1px rgba(1, 1, 3, 0.5);
}

@media (max-width: 768px) {
  .container {
    width: 100%;
    max-width: 750px;
    margin-left: 20px;
    margin-right: 20px;
  }

  form {
    width: 300px;
    margin: 20px auto;
  }

  .login {
    width: 400px;
    padding: 20px;
  }

  button {
    width: 100%;
  }

  .rigth img {
    width: 100%;
    height: 100%;
  }
}

</style>
<div class="container">
  <div class="login">
      <form action="{{ route('register.post') }}" method="POST">
          @csrf
          <h1>Sign Up</h1>
          <hr />
          <p>Toko Baju</p>
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Username" required />
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="example@gmail.com" required />
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Password" required />
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
          <button type="submit">Sign Up</button>
          <p>
              Already have an account? <a href="{{ route('login') }}">Login</a>
          </p>
      </form>
  </div>
  <div class="right">
      <img src="{{ asset('assets/image/profil.jpg') }}" alt="Profile Image" />
  </div>
</div>
