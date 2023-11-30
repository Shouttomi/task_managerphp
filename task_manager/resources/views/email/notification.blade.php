
Dear {{$data->task_owner}},<br>

The Task {{$data->task_description}},<br> {{$data->status == 0? "has been added for you":"Has been marked as completed"}}<br>

@if($data->status == 0)
kindly complete it within {{$data->task_eta}}<br>
@endif
Thank you.

