<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->string('currency_code');
            $table->double('opening_balance', 15, 4)->default('0.0000');
            $table->string('bank_name')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_phone')->nullable();
            $table->text('bank_address')->nullable();
            $table->boolean('enabled')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->text('description')->nullable();
            $table->double('sale_price', 15, 4);
            $table->double('purchase_price', 15, 4);
            $table->integer('quantity')->default(1);
            $table->integer('category_id')->nullable();
            $table->integer('tax_id')->nullable();
            $table->boolean('enabled')->default(1);

            $table->integer('business_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->unique(['business_id', 'sku', 'deleted_at']);
        });
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->double('rate', 15, 4);
            $table->string('type')->default('normal');
            $table->boolean('enabled')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('expense_transaction_id');
            $table->integer('income_transaction_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('reconciliations', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('account_id');
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->double('opening_balance', 15, 4)->default('0.0000');
            $table->double('closing_balance', 15, 4)->default('0.0000');
            $table->boolean('reconciled');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('color', 10)->default('#55588b');
            $table->boolean('enabled')->default(true);
            $table->timestamps();

            $table->index('business_id');
        });
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->string('code', 3)->nullable();
            $table->double('rate')->nullable();
            $table->string('precision',1)->nullable();
            $table->string('symbol',191)->nullable();
            $table->string('symbol_position', 10)->default('before');
            $table->string('decimal_mark',3)->nullable();
            $table->string('thousand_separator',3)->nullable();

            $table->boolean('enabled')->default(true);
            $table->boolean('default')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');

        });
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('type');
            $table->dateTime('transferred_at');
            $table->double('amount', 15, 4);
            $table->string('currency_code', 3);
            $table->double('currency_rate', 15, 8);
            $table->integer('account_id');
            $table->integer('document_id')->nullable();
            $table->integer('contact_id')->nullable();
            $table->integer('category_id')->default(1);
            $table->text('description')->nullable();
            $table->string('payment_method');
            $table->string('reference')->nullable();
            $table->integer('parent_id')->default(0);
            $table->boolean('reconciled')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('type');
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('website')->nullable();
            $table->string('currency_code', 3);
            $table->boolean('enabled');
            $table->string('reference')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
        Schema::create('recurrings', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->morphs('recurable');
            $table->string('frequency');
            $table->integer('interval')->default(1);
            $table->dateTime('started_at');
            $table->integer('count')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
        Schema::dropIfExists('items');
        Schema::dropIfExists('taxes');
        Schema::dropIfExists('transfers');
        Schema::dropIfExists('reconciliations');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('currencies');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('recurrings');
    }
}
