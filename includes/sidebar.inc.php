<ul>
					<li>
					<?php


				if(isset($_SESSION['status']))
				{
					echo '<h2 class="title">Hello '.$_SESSION['unm'].'!</h2>';
				}
				else
				{
					echo'
						<form action="process_login.php" method=POST>
						<b>Login:</b><br> <input type="text" name="unm" >
						<br>
						<br>
						<b>Password:</b><br><input type="password" name="pwd">
						<br>
						<br>
						<b>TYPE:<br><br><select name="cat">
										<option> employee
										<option> employer
										</select>
						<br>
						<br>
						<b><input type="submit" value="login">
						</form>
					';
					
				}
				?>
					</li>
				</ul>