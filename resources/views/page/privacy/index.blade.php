@extends('layouts.app')

@section('title', 'Chỉnh sách bảo vệ thông tin')

@section('content')
    @component('particals.jumbotron')
        <h4>Chỉnh sách bảo vệ thông tin</h4>
    @endcomponent

    <div class="article container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <h2>1. Mục đích và phạm vi thu thập</h2>
                    <ul>
                        Việc thu thập dữ liệu chủ yếu bao gồm: Thông qua đăng nhập Facebook: ID Facebook, tên của bạn,
                        ảnh
                        đại diện Thông qua đăng nhập Google: ID Google, tên của bạn, ảnh đại diện Đây là những thông tin
                        cần
                        thiết để chúng tôi xác định quyền sở hữu thông tin của bạn Các thành viên sẽ tự chịu trách nhiệm
                        về
                        bảo mật và lưu giữ mọi hoạt động sử dụng các tài khoản Facebook, Google của bạn chúng tôi không
                        quản
                        lý các tài khoản này của khách hàng sử dụng
                    </ul>

                    <h2>2. Phạm vi sử dụng thông tin</h2>
                    <ul>
                        <li>
                            Cung cấp các dịch vụ đến Thành viên; • Không sử dụng thông tin cá nhân của thành viên ngoài
                            mục
                            đích xác nhận liên quan đến thông tin lưu trữ của thành viên.
                        </li>
                        <li>
                            Trong trường hợp có yêu cầu của
                            pháp
                            luật: Chúng có trách nhiệm hợp tác cung cấp thông tin cá nhân thành viên khi có yêu cầu từ
                            cơ
                            quan
                            tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an điều tra liên quan đến hành vi vi
                            phạm
                            pháp
                            luật nào đó của khách hàng. Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của
                            thành
                            viên.
                        </li>
                    </ul>

                    <h2>3. Thời gian lưu trữ thông tin</h2>
                    <ul>
                        <li>
                            Dữ liệu cá nhân của Thành viên sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ. Còn lại trong
                            mọi
                            trường hợp thông tin cá nhân thành viên sẽ được bảo mật trên máy chủ của chúng tôi.
                        </li>
                    </ul>

                    <h2>4. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</h2>
                    <ul>
                        <li>Email: support@nbasic.dev</li>
                    </ul>

                    <h2>5. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</h2>
                    <ul>
                        <li>
                            Thành viên thay đổi thông tin từ phía Facebook, Google và thực hiện đăng nhập lại để cập nhật
                            thông tin.
                        </li>
                    </ul>

                    <h2>6. Cam kết bảo mật thông tin cá nhân khách hàng</h2>
                    <ul>
                        <li>
                            Thông tin cá nhân của thành viên trên VN Calendar được cam kết bảo mật tuyệt đối theo chính
                            sách bảo vệ thông tin cá nhân của VN Calendar. Việc thu thập và sử dụng thông tin của mỗi
                            thành
                            viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có
                            quy định
                            khác.
                        </li>
                        <li>
                            Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá
                            nhân
                            của thành viên khi không có sự cho phép đồng ý từ thành viên.
                        </li>
                        <li>
                            Chúng tôi chia sẻ mã nhận dạng cá nhân, tín hiệu mạng cho Google để hiển thị quảng cáo.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      hljs.initHighlightingOnLoad();
    </script>
@endsection
