<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionService;
use App\Models\TransactionVoucher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $user_id = rand(4, 13);
            $status_trx = ['waiting', 'success', 'failed'];

            $trx = Transaction::create([
                'user_id' => $user_id,
                'payment_id' => 1,
                'invoice' => 'TRX-' . Carbon::now()->format('YmdHisv') . $user_id,
                'nominal' => rand(10, 500) * 1000,
                'status' => $status_trx[rand(0, 2)],
                'last_updated_status' => Carbon::now(),
            ]);

            for ($i = 0; $i < rand(1, 5); $i++) {
                $item = Item::inRandomOrder()->first();
                $detail_trx = TransactionDetail::create([
                    'transaction_id' => $trx->id,
                    'item_id' => $item->id,
                    'item_name' => $item->name,
                    'nominal' => $item->price
                ]);

                if ($item->category == 'service') {
                    TransactionService::create([
                        'trx_detail_id' => $detail_trx->id,
                        'data_player' => json_encode([
                            'uid' => rand(9999, 100000000),
                            'zid' => rand(9999, 100000000),
                        ])
                    ]);
                }
                if ($item->category == 'voucher') {
                    TransactionVoucher::create([
                        'trx_detail_id' => $detail_trx->id,
                        'redeem_code' => 'reedem' . rand(999, 100000000)
                    ]);
                }
            }
        }
    }
}
