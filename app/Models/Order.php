<?php
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'customer_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}