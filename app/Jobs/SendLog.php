<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $channel;
    private $type;
    private $message;
    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($channel, $type, $message, $data)
    {
        $this->channel = $channel;
        $this->type = $type;
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        switch ($this->type) {
            case 'info':
                $log = Log::channel($this->channel)->info($this->message, $this->data);
                break;

            case 'alert':
                $log = Log::channel($this->channel)->alert($this->message, $this->data);
                break;

            case 'critical':
                $log = Log::channel($this->channel)->critical($this->message, $this->data);
                break;

            case 'debug':
                $log = Log::channel($this->channel)->debug($this->message, $this->data);
                break;

            case 'emergency':
                $log = Log::channel($this->channel)->emergency($this->message, $this->data);
                break;

            case 'error':
                $log = Log::channel($this->channel)->error($this->message, $this->data);
                break;

            case 'notice':
                $log = Log::channel($this->channel)->notice($this->message, $this->data);
                break;

            case 'warning':
                $log = Log::channel($this->channel)->warning($this->message, $this->data);
                break;

            default:
                $log = Log::channel($this->channel)->info($this->message, $this->data);
                break;
        }
    }
}
