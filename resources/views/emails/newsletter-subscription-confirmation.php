@component('mail::message')
Hi There,
<br/>
Thank you for subscribing to our dodgyone.com! We appreciate your interest in helping us as well as landlord community. <br/>
We'll keep you updated on the latest dodgy tenants, dodgy tricks, trends, and information in this industry. <br/>
We hope you enjoy our content and find it valuable. If you have any questions or feedback, please don't hesitate to contact us.<br/>
Thanks again for subscribing!<br/>
Sincerely,<br/>
The {{ config('app.name') }} Team<br/>

<small>If you wish to unsubscribe, you can do that [here]({{ url($subscription->unsubscribeUrl) }}) or by copying the below URL into your browser: <br/>
{{ url($subscription->unsubscribeUrl) }}

</small>
@endcomponent