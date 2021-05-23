<nav class="navbar navbar-inverse navbar-fixed-top"><!--navbar navbar-inverse navbar-fixed-top Begin -->
    <div class="navbar-head"><!--navbar-head Begin -->

    <button type="button" class="navbar-toggle" data-toggle="cpllapse" data-target=".navbar-ex1-collapse"><!--navbar-toggle Begin -->
    
    <span class="sr-only">Toggle Navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    
    </button><!--navbar-toggle finish -->

    <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>


    </div><!--navbar-head finish -->

    <ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav begin -->
    
    <li class="dropdown"><!--dropdown begin -->

    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--dropdown-toggle begin -->

    <i class="fa fa-user">MRghie <b class="caret"></b></i>
    
    </a><!--dropdown-toggle finish -->


    <ul class="dropdown-menu"><!--dropdown-menu begin -->

        <li><!--li begin -->
            <a href="index.php?user_profile"><!--ahref begin -->

                          <li class="fa fa-fw fa-user"></li> Profile
        
        
            </a><!--ahref finish-->
        </li><!--li finish -->
        <li><!--li begin -->

            <a href="index.php?view_products"> <!--ahref begin -->

                          <i class="fa fa-fw fa-envelope"></i> Products

                          <span class="badge">7</span>
        
        
            </a><!--ahref finish-->
        </li><!--li finish -->
        <li><!--li begin -->
            <a href="index.php?view_customers"><!--ahref begin -->

                          <i class="fa fa-fw fa-user"></i> Cutomers

                          <span class="badge">11</span>
        
        
            </a><!--ahref finish-->
        </li><!--li finish -->
        <li><!--li begin -->
            <a href="index.php?view_cats"><!--ahref begin -->

                          <i class="fa fa-fw fa-gear"></i> Product Categories

                          <span class="badge">4</span>
        
        
            </a><!--ahref finish-->
        </li><!--li finish -->

        <li class="divider"></li>

        <li><!--li begin -->
            <a href="logout.php"><!--ahref begin -->

                          <i class="fa fa-fw fa-power-off"></i> Log Out
        
        
            </a><!--ahref finish-->
        </li><!--li finish -->



    </ul><!--dropdown-menu finish -->
    
    </li><!--dropdown finish -->

    </ul><!--nav navbar-right top-nav finish -->

    <div class="collapse navbar-collapse navbar-ex1-collapse"><!--collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!--nav navbar-nav side-nav begin -->
            <li><!--li begin -->

            <a href="index.php?dashboard"><!--ahref begin -->

                <i class="fa fa-fw fa-dashboard"></i> Dashboard


             </a><!--ahref finish-->

            
            </li><!--li finish -->


               <li><!--li begin -->

                 <a href="#" data-toggle="collapse" data-target="#products"><!--ahref begin -->

                            <i class="fa fa-fw fa-tag"></i> Products
                            <i class="fa fa-fw fa-caret-down"></i> 


                        </a><!--ahref finish-->

                        <ul id="products" class="collapse"><!--collapse start-->
                            <li><!--li begin -->

                            <a href="index.php?insert_product"> Insert Product</a>
                            </li><!--li finish -->
                            <li><!--li begin -->
                            <a href="index.php?view_products"> View Product</a>

                            </li><!--li finish -->
                        </ul><!--collapse finish-->


                 </li><!--li finish -->

                 <li><!--li begin -->

<a href="#" data-toggle="collapse" data-target="#p_cat"><!--ahref begin -->

           <i class="fa fa-fw fa-edit"></i> Products Categories
           <i class="fa fa-fw fa-caret-down"></i> 


       </a><!--ahref finish-->

       <ul id="p_cat" class="collapse"><!--collapse start-->
           <li><!--li begin -->

           <a href="index.php?insert_p_cat"> Insert Product category</a>
           </li><!--li finish -->
            <li><!--li begin -->
           <a href="index.php?view_p_products"> View Product categories</a>

           </li><!--li finish -->
       </ul><!--collapse finish-->


</li><!--li finish -->

<li><!--li begin -->

<a href="#" data-toggle="collapse" data-target="#cat"><!--ahref begin -->

           <i class="fa fa-fw fa-book"></i> Categories
           <i class="fa fa-fw fa-caret-down"></i> 


       </a><!--ahref finish-->

       <ul id="cat" class="collapse"><!--collapse start-->
           <li><!--li begin -->

           <a href="index.php?insert_cat"> Insert category</a>
           </li><!--li finish -->
             <li><!--li begin -->
           <a href="index.php?view_cats"> View categories</a>

           </li><!--li finish -->
       </ul><!--collapse finish-->


</li><!--li finish -->

<li><!--li begin -->

<a href="#" data-toggle="collapse" data-target="#slides"><!--ahref begin -->

           <i class="fa fa-fw fa-gear"></i> Slides
           <i class="fa fa-fw fa-caret-down"></i> 


       </a><!--ahref finish-->

       <ul id="slides" class="collapse"><!--collapse start-->
           <li><!--li begin -->

           <a href="index.php?insert_slide"> Insert Slides</a>
           </li><!--li finish -->
          <li><!--li begin -->
           <a href="index.php?view_slides"> View Slides</a>

           </li><!--li finish -->
       </ul><!--collapse finish-->
</li><!--li finish -->

<li><!--li begin -->
<a href="index.php?view_customers"><!--a href begin-->

    <i class="fa fa-fw fa-users"></i>View Cutomers

</a><!--a href finish-->
</li><!--li finish -->

<li><!--li begin -->
<a href="index.php?view_orders"><!--a href begin-->

    <i class="fa fa-fw fa-book"></i>View Orders

</a><!--a href finish-->
</li><!--li finish -->

<li><!--li begin -->
<a href="index.php?view_payment"><!--a href begin-->

    <i class="fa fa-fw fa-money"></i>View Payments

</a><!--a href finish-->
</li><!--li finish -->

<li><!--li begin -->

<a href="#" data-toggle="collapse" data-target="#users"><!--ahref begin -->

           <i class="fa fa-fw fa-users"></i> Users
           <i class="fa fa-fw fa-caret-down"></i> 


       </a><!--ahref finish-->

       <ul id="users" class="collapse"><!--collapse start-->
           <li><!--li begin -->

           <a href="index.php?insert_user"> Insert User</a>
           </li><!--li finish -->
          <li><!--li begin -->
           <a href="index.php?view_users"> View Users</a>
           </li><!--li finish -->
           <li><!--li begin -->
           <a href="index.php?view_profile"> Edit User Profiles</a>
           </li><!--li finish -->
       </ul><!--collapse finish-->
</li><!--li finish -->

<li><!--li begin -->
<a href="logout.php"><!--a href begin-->

    <i class="fa fa-fw fa-power-off"></i>Log Out

</a><!--a href finish-->
</li><!--li finish -->


        </ul><!--nav navbar-nav side-nav finish -->
    </div><!--collapse navbar-collapse navbar-ex1-collapse finish -->

</nav><!--navbar navbar-inverse navbar-fixed-top Finish -->