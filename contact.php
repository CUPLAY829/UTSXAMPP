<style>
        /* Global Styles */
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            color: #333;
            background-color: #f5f5f5;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        
        /* Header */
        header {
            background-color: #333;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            color: #fff;
            font-weight: bold;
        }
</style>
<form action="/contact" method="post">
<link rel="stylesheet" type="text/css" href="css/main.css">
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="Name">
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="Email">
  <label for="message">Message</label>
  <textarea name="message" placeholder="Message"></textarea>
  <button type="submit">Submit</button>
</form>