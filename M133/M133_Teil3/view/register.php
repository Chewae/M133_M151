<?php 
class Register {
    
    function __construct(){
        if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
            echo '
                <div class="element" id="registerBlock">
                    <h2>Register</h2>
                    <form id="formRegister" action="registerUser" method="post">
                        <div class="formrow">
                            <label for="username02" class="label">Email*</label>
                            <input id="username02" name="registerName" type=email placeholder="Email-Address" required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" onkeyup="checkRegister()">
                            <br/>
                        </div>
                        <div class="formrow">
                            <label for="password02" class="label">Password*</label>
                            <input id="password02" name="registerPassword" type=password placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&:._])[A-Za-z\d@$!%*?&:._]{8,16}$" title="Enter a Password between 8 and 16 Characters (alphanumerical, ?, !, $, &, _" onkeyup="checkRegister()">
                            <div class="formrow" id="hint">
                                <p class="hintText">
                                    Enter a Password between 8 and 16 Characters (alphanumerical, ?, !, $, &, _)
                                </p>
                            </div>
                            <br/>
                        </div>
                        <div class="formrow">
                            <label for="rptPW" class="label">Repeat PW*</label>
                            <input id="rptPW" type=password placeholder="Repeat Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&:._])[A-Za-z\d@$!%*?&:._]{8,16}$" title="Repeat your Password" onkeyup="checkPasswords();checkRegister()">
                            <div id="confirmPW" class="formrow">
                                <p id="message" class="passwordCheck">
                                    <!-- Passwords Match! OR Passwords Do Not Match! -->
                                </p>
                            </div>
                            <br/>
                        </div>
                        <div class="formrow">
                            <label class="label">Language*</label>
                            <select id="dropdown" name="registerLanguage" required size="1">
                                <option value="deutsch">Deutsch</option>
                                <option value="francais">Français</option>
                                <option value="english" selected>English</option>
                            </select>
                            <br/>
                        </div>
                        <div class="formrow">
                            <label class="label">Gender</label>
                            <label class="spLabel"><input id="radio01" type="radio" name="gender" value="male">Male</label>
                            <label class="spLabel"><input id="radio02" type="radio" name="gender" value="female">Female</label><br/>
                        </div>
                        <div class="formrow">
                            <label class="label">Hobby</label>
                            <label class="spLabel">Reading<input id="checkbox01" type="checkbox" name="hobby" value="reading"></label><br/>
                            <label class="spLabel">Writing<input id="checkbox02" type="checkbox" name="hobby" value="writing"></label><br/>
                            <label class="spLabel">Sports<input id="checkbox03" type="checkbox" name="hobby" value="sports"></label><br/>
                        </div>
            ';
            if(isset($_SESSION['registerERR']) && !empty($_SESSION['registerERR'])){
                echo $_SESSION['registerERR'];
                unset($_SESSION['registerERR']);
            }
            echo '
                        <button id="button02" type=submit>Sign In</button>
                    </form>
                        <script type="text/javascript">
                        disableButton("button02");
                    </script>
                </div>
            ';
        }
    }
}

?>

