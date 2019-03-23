<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-left">Sakshi Jewellers</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Inventory
    </div>




    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Category</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="categories.php?src=add-category">Add category</a>
                <a class="collapse-item ajax-link" href="categories.php?src=view-all-category">View All Categories</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-fw fa-ring"></i>
            <span>Product</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="products.php?src=add-product">Add product</a>
                <a class="collapse-item ajax-link" href="products.php?src=view-all-product">View All Products</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePurchase" aria-expanded="true" aria-controls="collapsePurchase">
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Purchase</span>
        </a>
        <div id="collapsePurchase" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="purchases.php?src=add-purchase">Add Purchase</a>
                <a class="collapse-item ajax-link" href="purchases.php?src=view-all-purchase">View All Purchases</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier" aria-expanded="true" aria-controls="collapseSupplier">
            <i class="fas fa-fw fa-user-circle "></i>
            <span>Supplier</span>
        </a>
        <div id="collapseSupplier" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="suppliers.php?src=add-supplier">Add Supplier</a>
                <a class="collapse-item ajax-link" href="suppliers.php?src=view-all-supplier">View All Suppliers</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customer</span>
        </a>
        <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="customers.php?src=add-customer">Add Customer</a>
                <a class="collapse-item ajax-link" href="customers.php?src=view-all-customer">View All Customers</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInvoice" aria-expanded="true" aria-controls="collapseInvoice">
            <i class="fas fa-fw fa-money-bill-alt"></i>
            <span>Invoice</span>
        </a>
        <div id="collapseInvoice" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="invoices.php?src=add-invoice">Create Invoice</a>
                <a class="collapse-item ajax-link" href="invoices.php?src=view-all-invoice">View All Invoices</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ajax-link" href="users.php?src=add-user-2">Add user</a>
                <a class="collapse-item ajax-link" href="users.php?src=view-all-users">View All Users</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link ajax-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>GST Settings</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->