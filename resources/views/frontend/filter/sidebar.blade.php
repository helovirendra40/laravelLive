<aside class="col-md-3 bg-white forFilterPage" style="padding-bottom: 50px">
    <i class="fa filterCLoseIcon fa-close"></i>
    <div class="widget widget_check-box ">   
        <div class="accordion-item open ">
            <h5  class="accordion-toggle mb-0">Search </h5>
            <div class="accordion-content pr-15">           
                    <div class="filetrSearch">                        
                        <input type="text." class="form-control" />
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1"/>
                    </div>                    
            </div>
        </div>
    </div>  
    <div class="widget widget_check-box">                  
    <div class="accordion-item mb-0 open">
            <h5  class="accordion-toggle mb-0">Location</h5>
            <div class="accordion-content" style="padding-right: 15px">   
                <div class="filetrSearch">                        
                    <input type="text." id="myInput" onkeyup="myFunction()" class="form-control">
                    <img width="50" height="50" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1">
                </div>
                <script>
                    function myFunction() {
                        var input, filter, ul, li, a, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        ul = document.getElementById("myUL");
                        li = ul.getElementsByTagName("li");
                        for (i = 0; i < li.length; i++) {
                            a = li[i].getElementsByTagName("a")[0];
                            txtValue = a.textContent || a.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "";
                            } else {
                                li[i].style.display = "none";
                            }
                        }
                    }
                    </script>
                  
                <ul id="myUL" class="mt-2">   
                    <li class="d-flex"> <div class="checkbox-wrapper-48">
                        <label><input type="checkbox" name="cb"></label>
                      </div> <a class="text-black" href="#">Delhi</a></li>
                    <li class="d-flex"><div class="checkbox-wrapper-48">
                        <label><input type="checkbox" name="cb"></label>
                      </div><a class="text-black" href="#">Pune</a></li>
                    <li class="d-flex"><div class="checkbox-wrapper-48">
                        <label><input type="checkbox" name="cb"></label>
                      </div><a class="text-black" href="#">Pumbai</a></li>
                    <li class="d-flex"><div class="checkbox-wrapper-48">
                        <label><input type="checkbox" name="cb"></label>
                      </div><a class="text-black" href="#">Kolkata</a></li>

                    
                   
                </ul>
            </div>
            </div>
    </div>
    <div class="widget widget_check-box">
        <div class="accordion-item mb-0 open ">
            <h5  class="accordion-toggle mb-0">Total Fees</h5>
            <div class="accordion-content ">
        
                <ul>
                    <li>
                        <div class="wm-level-checkbox">
                            <input id="level1" type="checkbox">
                            <label for="level1">
                                <span></span>
                                Less 1 Lakh
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="wm-level-checkbox">
                            <input id="level2" type="checkbox">
                            <label for="level2">
                                <span></span>
                                 1 - 2 Lakh
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class="wm-level-checkbox">
                            <input id="level3" type="checkbox">
                            <label for="level3">
                                <span></span>
                                2 - 3 Lakh
                            </label>
                        </div>    
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="widget widget_check-box ">
        <div class="accordion-item mb-0 open ">
            <h5  class="accordion-toggle mb-0">Specialization</h5>
            <div class="accordion-content ">                                   
                <ul>    
                    <li>
                        <input id="land1" type="checkbox">
                        <label for="land1">
                            <span></span>
                            Specialization 1
                        </label>
                    </li>
                    <li>
                        <input id="land2" type="checkbox">
                        <label for="land2">
                            <span></span>
                            Specialization 2
                        </label>
                    </li>
                    <li>
                        <input id="land3" type="checkbox">
                        <label for="land3">
                            <span></span>
                            Specialization 3
                        </label>
                    </li>
                    <li>
                        <input id="land4" type="checkbox">
                        <label for="land4">
                            <span></span>
                            Specialization 4
                        </label>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="widget widget_check-box">
        <div class="accordion-item mb-0 open">
            <h5  class="accordion-toggle mb-0">Exams Accepted</h5>
            <div class="accordion-content ">  
        
                <ul>    
                    <li>
                        <input id="duration1" type="checkbox">
                        <label for="duration1">
                            <span></span>
                            Under 1 hr
                        </label>
                    </li>
                    <li>
                        <input id="duration2" type="checkbox">
                        <label for="duration2">
                            <span></span>
                            1hr - 1hr 30mins
                        </label>
                    </li>
                    <li>
                        <input id="duration3" type="checkbox">
                        <label for="duration3">
                            <span></span>
                            2 hrs
                        </label>
                    </li>
                    <li>
                        <input id="duration4" type="checkbox">
                        <label for="duration4">
                            <span></span>
                            2 hrs - 3hrs
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside> 


