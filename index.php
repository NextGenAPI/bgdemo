<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
    <title>UMobile Demo</title>
    <script src="../components/jquery/dist/jquery.min.js"></script>
    <script src="../components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../dist/js/patternfly.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Basic</li>
          </ol>
          <h1>Welcome to DevOps CD/CI Demo</h1>
          <p>The purpose of this site is to demonstrate CD/CI pipeline capabilities. Pipeline build is working !</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Information</h2>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Project Name</td>
                <td><?php echo $_SERVER['SERVER_NAME'] ?></td>
              </tr>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Example</h2>
          <p>
            <img src="bluerose.jpeg">
          </p>
        </div>
      </div>
        </div><!-- /col -->
      </div><!-- /row -->
    </div><!-- /container -->
    <script>
      // Initialize Datatables
      $(document).ready( function() {
        $('.datatable').dataTable();
      });
    </script>
  </body>
</html>
