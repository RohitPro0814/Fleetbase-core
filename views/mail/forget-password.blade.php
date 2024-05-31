<x-mail-layout>
Dear {{$user_name}}, <br/>
We received a request to reset your password for your {{$company_name}} fleetbase account. If you did not make this request, please ignore this email. Otherwise, you can reset your password using the link below:<br/>

<a href="{{$url}}" style="color:white;background:#0a74d1; padding:5px 15px; border-radius:10px">Reset Password</a> <br/>

This link will expire in 15 minutes for your security.<br/>
Reset Code: {{$Code}}<br/>
If you have any questions or need further assistance, please do not hesitate to contact our support team at demo@carvach.com.

Thank you for using {{$company_name}} fleetbase

Best regards,<br/>
{{$company_name}}
</x-mail-layout>