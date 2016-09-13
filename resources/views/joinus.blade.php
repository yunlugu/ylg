@extends('layouts.index')

@section('stylesheet')
<link href="css/jumbotron-narrow.css" rel="stylesheet">
<link href="plugin/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="plugin/fileinput/js/fileinput.min.js"></script>
<script src="plugin/fileinput/js/locales/zh.js">
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection

@section('title')
   加入我们
@endsection

@section('content')
<div class="container">
  <div class="header clearfix">
    <nav>
      <ul class="nav pull-right">
        <li role="presentation" class="active"><a href="#">加入我们</a></li>
      </ul>
    </nav>
    <div class="row">
      <div class="col-xs-3 col-sm-3"><img src="logo.jpg" alt="云麓谷" class="img-responsive img-circle" ></div>
    </div>

  </div>

  <div class="jumbotron">
    <h1>加入mmamm们</h1>
    <p class="lead">下载报名表，填好再回来上传哦～</p>
    <p><a class="btn btn-lg btn-success" href="form.doc" role="button">下载报名表</a></p>
    <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">提交报名表</a></p> -->
    <form action='{{url('joinus')}}' method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <label class="control-label">上传报名表</label>
      <input id="myupload" name="myupload[]" type="file" multiple class="file-loading">
      <script>
      $(document).on('ready', function() {
          $("#myupload").fileinput({showCaption: false, language: 'zh', allowedFileExtensions: ['doc', 'docx', 'pdf']});
        });
        </script>
    </form>
  </div>

  <div class="row marketing">
    <div class="col-lg-6">

      <h4>温馨提示</h4>
      <p>1.建议上传报名表时以”部门-小组-姓名“的格式命名</p>
      <p>2.可同时上传多张报名表</p>

    </div>

  </div>

  <footer class="footer">
    <p>&copy; 2016 云麓谷.</p>
  </footer>

</div> <!-- /container -->
@endsection

@section('script')

@endsection
