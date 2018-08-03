@extends('layouts.admin')
<style type="text/css" media="screen">
    #orders-list th,#orders-list td{padding: 0px 0.3%}  
    #i{margin-left:80%}
	 .paginatin ul{display: inline;}
	
</style>
<link rel="stylesheet" type="text/css" href="/houtai/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/houtai/css/sweetalert.css">
@section('content')
<script src="/houtai/js/bootstrap.min.js"></script>
<script src="/houtai/js/sweetalert.min.js"></script>
<script src="/houtai/js/sweetalert-dev.js"></script>
<div class="page-content">
    @if( session('session') )
        <script>
            var session =' {{ session('session') }}' ;

            swal(session);
        </script>
    @endif
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入订单号" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" id="but" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
                <i id="i" class="layui-icon">&#xe609;发货</i>
                <i class="layui-icon">&#xe642;修改</i>
                <i class="layui-icon">&#xe640;删除</i>
                <i class="layui-icon">&#xe640;详情</i>
            <table class="layui-table" id="orders-list">
                <thead>
                    <tr>
                        <th>订单号</th>
                        <th>收货人</th>
                        <th>收货地址</th>
                        <th> 收货电话</th>
                        <th>邮编</th>
                        <th>商品数量</th>
                        <th>订单总价</th>
                        <th>下单时间</th>
                        <th>订单状态</th> 
                        <th>买家留言</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
				@foreach($orders as $k => $v)	
                    <tr>
                     	<td class="td-oid">{{ $v->oid }}</td>
                     	<td>{{ $v->link_man }}</td>
                     	<td>{{ $v->addr }}</td>
                     	<td>{{ $v->otel }}</td>
                     	<td>{{ $v->mail }}</td>
                     	<td>{{ $v->sum }}</td>
                     	<td>{{ $v->total }}</td>
                     	<td>{{ date('Y-m-d H:i:s',$v->create_at) }}</td>
                     	<td class="td-status">          
                          @if( $v->status == 0 )未发货
                          @elseif( $v->status == 1 )已发货
                          @elseif( $v->status == 2 )已收货
                          @elseif( $v->status == 3 )订单已取消
					                @endif
                      </td>
                     	
                     	<td>{{ $v->msg }}</td>
                        <td class="td-manage">
                          	<a style="text-decoration:none" id="fahuo" onclick="fahuo(this)" href="javascript:;" title="发货">
                                <i class="layui-icon">&#xe609;</i>
                            </a>
                            <a title="编辑" href="/admin/orders/{{$v->oid}}/edit" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <form  action="/admin/orders/{{$v->oid}}" method='post' style='display:inline'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                               	<a title="删除" href="javascript:;" class="ml-5" style="text-decoration:none">
                               		<button type="" style="border: 0px;background-color:transparent;">
                               			<i class="layui-icon">&#xe640;</i>
                               		</button>
                               	</a>
                            </form>
                         	  <a title="详情" href="/orders/info/{{$v->id}}?t={{$v->create_at}}&s={{$v->status}}&oid={{$v->oid}}" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe63c;</i>
                            </a>
                        </td>
                    </tr>
				@endforeach
                </tbody>
            </table>     	
        	<!-- 分页 -->
			<div class="paginatin" style="position: absolute;">{{ $orders->links() }}</div>
			<!-- 跳转 -->
			<div style=" margin-left: 65%;position: absolute;">
		        <span style="font-size: 17px">跳转到第</span>
    				<form style="display: inline;" action="/admin/orders" method="get" accept-charset="utf-8">
    		            <input style="width: 30px; height: 25px; display: inline;" type="text" value="{{$page}}" name="page" autocomplete="off" class="layui-input">
    		            <span style="font-size: 17px">页</span> 
    		            <button style="display: inline;" class="layui-btn layui-btn-normal layui-btn-radius">GO</button>    
    				</form>
	    </div>	
     	<!-- 右侧内容框架，更改从这里结束 -->
  </div>
</div>  
<script> 

        /*用户-发货*/
        function fahuo(obj){
        	//获取状态
        	var status =  $(obj).parents('td').siblings('.td-status').html();
        	//去掉空白
        	status = status.replace(/\s*/g,"");
        	//判断状态
        	if( status == '未发货' ){
                swal({
                        title: "您确定要发货吗？",
                        text: "您确定已经发出物品吗？",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "是的，我要发货",
                        cancelButtonText: "NO",
                        confirmButtonColor: "#ec6c62",
                        closeOnCancel: false,
                }, function(isConfirm) {
                        if(isConfirm){
                            //获取当前订单号
                            var oid =  $(obj).parents('td').siblings('.td-oid').html();
                            //发送AJAX  
                            $.ajax({ 
                                type: 'get',  
                                data: 'id=' + oid,
                                url:"/fahuo",
                                success:function(data){
                                       if(data == 1){
                                         //修改订单状态栏提示
                                        $(obj).parents('td').siblings('.td-status').html('已发货');
                                        swal("发货成功");
                                       };  
                                }
                            });
                        }else{
                            swal("OK!", "已取消", "success");
                        }
                });
	        }else{
                swal(status+",禁止操作");
	        	    return false;
	        }
        }
</script>


@endsection
