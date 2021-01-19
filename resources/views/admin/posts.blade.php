<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="">
                    Laravel Blog
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <ul class="nav navbar-nav">
                    <li><a href="admin/posts">Posts</a></li>
                    <li><a href="admin/categories">Categories</a></li>
                    <li><a href="admin/comments">Comments</a></li>
                    <li><a href="admin/tags">Tags</a></li>

                    <li><a href="admin/users">Users</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Admin <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="logout" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href=/posts/create" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Quo ut eius magni ut adipisci perspiciatis non maxime.</td>
                                    <td>Animi praesentium ad ipsum adipisci cum ea rerum quasi. Haru...</td>
                                    <td>Prof. General Huel IV</td>
                                    <td>ipsum</td>
                                    <td></td>
                                    <td>No</td>
                                    <td>
                                        <a href=/posts/1/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href=/posts/1" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/1/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/1" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Similique ea eum odit aspernatur quibusdam atque.</td>
                                    <td>Quae ratione error dicta pariatur sit molestiae. Eos quo lib...</td>
                                    <td>Bella Kuhn V</td>
                                    <td>unde</td>
                                    <td>nam, sit, omnis</td>
                                    <td>Yes</td>
                                    <td>
                                        <a href="/posts/2/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Draft</a>
                                        <a href="/posts/2" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/2/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="/posts/2" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Culpa odio hic est quod dolorum rerum.</td>
                                    <td>Perspiciatis nesciunt nesciunt et maiores porro sunt. Provid...</td>
                                    <td>Stone Hirthe</td>
                                    <td>id</td>
                                    <td>non, et</td>
                                    <td>No</td>
                                    <td>
                                        <a href="/posts/3/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href="/posts/3" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/3/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="/posts/3" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quia harum tempora vitae illo sed.</td>
                                    <td>Ullam qui dicta odit sint rerum in enim odit. Esse debitis m...</td>
                                    <td>Lacey Gaylord DVM</td>
                                    <td>unde</td>
                                    <td>et, nam, molestias</td>
                                    <td>Yes</td>
                                    <td>
                                        <a href="/posts/4/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Draft</a>
                                        <a href="/posts/4" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/4/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="/posts/4" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Modi hic dolor qui sit.</td>
                                    <td>Consequatur perspiciatis deleniti quia laborum omnis sed arc...</td>
                                    <td>Mrs. Izabella Bashirian Sr.</td>
                                    <td>ut</td>
                                    <td></td>
                                    <td>No</td>
                                    <td>
                                        <a href="/posts/5/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href="/posts/5" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/5/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="/posts/5" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Est ea ea modi est est consequatur culpa.</td>
                                    <td>Vel iusto et est sit voluptas et veniam. Illum aut ipsa aliq...</td>
                                    <td>Favian Halvorson</td>
                                    <td>voluptatum</td>
                                    <td>illum, ad</td>
                                    <td>Yes</td>
                                    <td>
                                        <a href=/posts/6/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Draft</a>
                                        <a href=/posts/6" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/6/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/6" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Est dolorum vel repellat non mollitia et laudantium.</td>
                                    <td>Officia consequatur ut nihil. Dolorum perspiciatis quibusdam...</td>
                                    <td>Admin</td>
                                    <td>unde</td>
                                    <td>non, et</td>
                                    <td>No</td>
                                    <td>
                                        <a href=/posts/7/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href=/posts/7" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/7/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/7" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deleniti quisquam ipsam sint veritatis neque culpa quae.</td>
                                    <td>Autem alias sed eos est doloremque quod neque. Et sapiente v...</td>
                                    <td>Bella Kuhn V</td>
                                    <td>quisquam</td>
                                    <td>illum, nam, illum</td>
                                    <td>No</td>
                                    <td>
                                        <a href=/posts/8/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href=/posts/8" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/8/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/8" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sapiente dolorum quo non voluptates atque dolore.</td>
                                    <td>Nam cum sint totam id quibusdam molestiae. Corporis cupidita...</td>
                                    <td>Stone Hirthe</td>
                                    <td>ut</td>
                                    <td>debitis, nihil, sit, non</td>
                                    <td>Yes</td>
                                    <td>
                                        <a href=/posts/9/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Draft</a>
                                        <a href=/posts/9" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/9/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/9" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vitae non et et nisi amet.</td>
                                    <td>At eveniet aperiam eveniet placeat libero expedita autem. El...</td>
                                    <td>Favian Halvorson</td>
                                    <td>sint</td>
                                    <td>non, ad, molestias</td>
                                    <td>Yes</td>
                                    <td>
                                        <a href=/posts/10/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Draft</a>
                                        <a href=/posts/10" class="btn btn-xs btn-success">Show</a>
                                        <a href=/posts/10/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href=/posts/10" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="pagination">

                            <li class="disabled"><span>«</span></li>





                            <li class="active"><span>1</span></li>
                            <li><a href=/posts?page=2">2 </a> </li> <li><a href=/posts?page=3">3 </a> </li> <li><a href=/posts?page=2"
                                            rel="next">»</a></li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>