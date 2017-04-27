<!-- Left Navigation -->
<div class="col-md-3">
    <div class="panel-group" id="accordian">

        <div class="list-group">
            <a href="{{ url('/admin/categories') }}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Categories
            </a>
        </div>

        <div class="list-group">
            <a data-toggle="collapse" data-parent="#accordian" href="#admin_products" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Products
            </a>
            <div id="admin_products" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul style="list-style: none">
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Products <span class="badge">12</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Product Groups <span class="badge">12</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Product Attributes <span class="badge">12</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="list-group">
            <a data-toggle="collapse" data-parent="#accordian" href="#admin_user" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Users
            </a>
            <div id="admin_user" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul style="list-style: none">
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">33</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Profiles <span class="badge">203</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 8px; margin-left: -40px">
                            <a href="#" class="list-group-item">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Addresses <span class="badge">203</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="list-group">
            <a href="{{ url('/admin') }}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Site Settings
            </a>
        </div>
    </div>
</div>
