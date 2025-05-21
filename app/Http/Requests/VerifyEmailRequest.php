<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Events\Verified;
use App\Models\User;

class VerifyEmailRequest extends FormRequest
{
    /**
     * تحديد إذا ما كان المستخدم مخولًا لتنفيذ هذا الطلب.
     */
    public function authorize(): bool
    {
        // الحصول على المعرف والهاش من الرابط
        /** @var \Illuminate\Routing\Route $route */
        $route = $this->route();

        $id = $route->parameter('id');
        $hash = $route->parameter('hash');

        // التحقق من تطابق معرف المستخدم
        if (! hash_equals((string) $this->user()->getKey(), (string) $id)) {
            return false;
        }

        // التحقق من تطابق هاش البريد الإلكتروني
        if (! hash_equals(sha1($this->user()->getEmailForVerification()), (string) $hash)) {
            return false;
        }

        return true;
    }

    /**
     * تنفيذ عملية التحقق من البريد.
     */
    public function fulfill(): void
    {
        if (! $this->user()->hasVerifiedEmail()) {
            $this->user()->markEmailAsVerified();
            event(new Verified($this->user()));
        }
    }

    /**
     * تحضير الطلب قبل التحقق.
     */
    public function prepareForValidation(): void
    {
        // تعيين المستخدم
    }
}
