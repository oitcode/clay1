<div>

  <div class="d-flex mb-4 pl-2" style="font-size: 1rem;">
    <div class="mr-4">
      New : {{ $newMessageCount }}
    </div>
    <div class="mr-4">
      Today : {{ $todayMessageCount }}
    </div>
    <div class="mr-4">
      Total : {{ $totalMessageCount }}
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
      @if ($contactMessages != null && count($contactMessages) > 0)

      {{-- Show in bigger screens --}}
      <div class="table-responsive mb-3 d-none d-md-block">
        <table class="table table-bordered-rm table-hover border">
          <thead>
            <tr class="bg-success text-white" style="font-size: 1.1rem;">
              <th style="width: 120px;">
                ID
              </th>
              <th style="width: 200px;">
                Name
              </th>
              <th style="width: 200px;">
                Phone
              </th>
              <th style="width: 200px;">
                Message
              </th>
              <th>
                Status
              </th>
            </tr>
          </thead>

          <tbody class="bg-white">
            @foreach ($contactMessages as $contactMessage)
              <tr style="" role="button" wire:click="$emit('displayContactMessage', {{ $contactMessage->contact_message_id }})">
                <td>
                  {{ $contactMessage->contact_message_id }}
                </td>
                <td class="pl-3">
                  {{ $contactMessage->name }}
                </td>
                <td class="pl-3">
                  {{ $contactMessage->phone }}
                </td>
                <td class="text-secondary-rm" style="">
                  {{ \Illuminate\Support\Str::limit($contactMessage->message, 15, $end=' ...') }}
                </td>
                <td>
                  @if (false)
                    @if ($order->status == 'new')
                      <span class="badge badge-pill badge-danger">
                        {{ $order->status }}
                      </span>
                    @elseif ($order->status == 'open')
                      <span class="badge badge-pill badge-warning" style="background-color: orange;">
                        {{ $order->status }}
                      </span>
                    @elseif ($order->status == 'rejected')
                      <span class="badge badge-pill badge-secondary">
                        {{ $order->status }}
                      </span>
                    @elseif ($order->status == 'delivered')
                      <span class="badge badge-pill badge-success">
                        {{ $order->status }}
                      </span>
                    @else
                      <span class="badge">
                        {{ $order->status }}
                      </span>
                    @endif
                  @endif
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      @else
        <div class="text-secondary pl-2" style="font-size: 1rem;">
          No online orders.
        </div>
      @endif
    </div>

    <div class="col-md-2">
    </div>
  </div>

</div>
