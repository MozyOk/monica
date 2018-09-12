<?php

return [
    'update' => 'تحديث',
    'save' => 'حفظ',
    'add' => 'إضافة',
    'cancel' => 'إلغاء',
    'delete' => 'حذف',
    'edit' => 'تعديل',
    'upload' => 'رفع',
    'close' => 'إغلاق',
    'create' => 'إنشاء',
    'remove' => 'إزالة',
    'revoke' => 'إلغاء',
    'done' => 'تم',
    'verify' => 'تحقق',
    'for' => 'من أجل',
    'new' => 'جديد',
    'unknown' => 'لا أعرف',
    'load_more' => 'تحميل المزيد',
    'loading' => 'جاري التحميل...',
    'with' => 'مع',
    'days' => 'يوم|أيام',
    'today' => 'اليوم',
    'yesterday' => 'أمس',
    'another_day' => 'يوم آخر',
    'date' => 'التاريخ',
    'type' => 'النوع',

    'application_title' => 'مونيكا – مدير العلاقات الشخصية',
    'application_description' => 'Monica هو أداة لإدارة تفاعلاتك مع أحبائك، أصدقائك و عائلتك.',
    'application_og_title' => 'امتلك علاقات أفضل مع أحبائك. مدير علاقات مجاني على الويب للعائلة و الأصدقاء.',

    'markdown_description' => 'هل تريد تنسيق النص الخاص بك بطريقة لطيفة؟ نحن ندعم التحديد و إضافة السماكة، و الإمالة و القوائم و المزيد.',
    'markdown_link' => 'اقرأ الوثائق',

    'header_settings_link' => 'الإعدادات',
    'header_logout_link' => 'تسجيل الخروج',
    'header_changelog_link' => 'تغيرات المنتج',

    'main_nav_cta' => 'إضافة أشخاص',
    'main_nav_dashboard' => 'لوحة التحكم',
    'main_nav_family' => 'جهات الاتصال',
    'main_nav_journal' => 'يوميات',
    'main_nav_activities' => 'الأنشطة',
    'main_nav_tasks' => 'المهام',

    'footer_remarks' => 'أي ملاحظات؟',
    'footer_send_email' => 'أرسل لي رسالة',
    'footer_privacy' => 'سياسة الخصوصية',
    'footer_release' => 'ملاحظات الإصدار',
    'footer_newsletter' => 'النشرة الإخبارية',
    'footer_source_code' => 'ساهم',
    'footer_version' => 'الإصدار: :version',
    'footer_new_version' => 'يتوفر إصدار جديد',

    'footer_modal_version_whats_new' => 'ما الجديد؟',
    'footer_modal_version_release_away' => 'You are 1 release behind the latest version available. You should update your instance.|You are :number releases behind the latest version available. You should update your instance.',

    'breadcrumb_dashboard' => 'لوحة التحكم',
    'breadcrumb_list_contacts' => 'قائمة الأشخاص',
    'breadcrumb_journal' => 'يوميات',
    'breadcrumb_settings' => 'الإعدادات',
    'breadcrumb_settings_export' => 'استخراج',
    'breadcrumb_settings_users' => 'المستخدمون',
    'breadcrumb_settings_users_add' => 'إضافة مستخدم',
    'breadcrumb_settings_subscriptions' => 'اشتراك',
    'breadcrumb_settings_import' => 'استيراد',
    'breadcrumb_settings_import_report' => 'استيراد التقرير',
    'breadcrumb_settings_import_upload' => 'رفع',
    'breadcrumb_settings_tags' => 'Tags',
    'breadcrumb_add_significant_other' => 'Add significant other',
    'breadcrumb_edit_significant_other' => 'Edit significant other',
    'breadcrumb_add_note' => 'أضف ملاحظة',
    'breadcrumb_edit_note' => 'حرر ملاحظة',
    'breadcrumb_api' => 'API (واجهة برمجة التطبيق)',
    'breadcrumb_edit_introductions' => 'كيف تقابلتما',
    'breadcrumb_settings_personalization' => 'التخصيص',
    'breadcrumb_settings_security' => 'الأمن',
    'breadcrumb_settings_security_2fa' => 'المصادقة الثنائية',
    'breadcrumb_profile' => 'الملف الشخصي لـ :name',

    'gender_male' => 'رجل',
    'gender_female' => 'إمرأة',
    'gender_none' => 'أُفَضل ألا أقول',

    'error_title' => 'عفواً! حصل خطأ ما.',
    'error_unauthorized' => 'ليس لديك الصلاحية لتحرير هذا المصدر.',
    'error_save' => 'لقد حصل خطأ بينما كنا نحاول حفظ البيانات.',
    'error_try_again' => 'حدث خطأ ما. الرجاء المحاولة مرة أخرى.',

    'default_save_success' => 'تم حفظ البيانات.',

    'compliance_title' => 'نعتذر للإزعاج.',
    'compliance_desc' => 'لقد قمنا بتغيير <a href=":urlterm" hreflang=":hreflang">شروط الإستخدام</a>و<a href=":url" hreflang=":hreflang">سياسة الخصوصية</a> الخاصة بنا. بموجب القانون، نطلب منك مراجعتها و قبولها لكي يمكنك الإستمرار في استخدام حسابك.',
    'compliance_desc_end' => 'نحن لن نسيء إلى بياناتك أو حسابك و لن نفعل ذلك أبداً.',
    'compliance_terms' => 'القبول بالشروط و سياسة الخصوصية الجديدية',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'علاقات حب',
    'relationship_type_group_family' => 'علاقات عائلية',
    'relationship_type_group_friend' => 'علاقات صداقة',
    'relationship_type_group_work' => 'علاقات عمل',
    'relationship_type_group_other' => 'نوع آخر من العلاقات',

    'relationship_type_partner' => 'significant other',
    'relationship_type_partner_female' => 'significant other',
    'relationship_type_partner_with_name' => ':name’s significant other',
    'relationship_type_partner_female_with_name' => ':name’s significant other',

    'relationship_type_spouse' => 'زوج',
    'relationship_type_spouse_female' => 'زوجة',
    'relationship_type_spouse_with_name' => 'زوج :name’s',
    'relationship_type_spouse_female_with_name' => 'زوجة :name’s',

    'relationship_type_date' => 'موعد',
    'relationship_type_date_female' => 'موعد',
    'relationship_type_date_with_name' => ':name’s date',
    'relationship_type_date_female_with_name' => ':name’s date',

    'relationship_type_lover' => 'عاشق',
    'relationship_type_lover_female' => 'عاشقة',
    'relationship_type_lover_with_name' => ':name’s lover',
    'relationship_type_lover_female_with_name' => ':name’s lover',

    'relationship_type_inlovewith' => 'مغرم بـ',
    'relationship_type_inlovewith_female' => 'مغرمة بـ',
    'relationship_type_inlovewith_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_female_with_name' => 'someone :name is in love with',

    'relationship_type_lovedby' => 'محبوب من قِبل',
    'relationship_type_lovedby_female' => 'محبوبة من قِبل',
    'relationship_type_lovedby_with_name' => ':name’s secret lover',
    'relationship_type_lovedby_female_with_name' => ':name’s secret lover',

    'relationship_type_ex' => 'ex-boyfriend',
    'relationship_type_ex_female' => 'ex-girlfriend',
    'relationship_type_ex_with_name' => ':name’s ex-boyfriend',
    'relationship_type_ex_female_with_name' => ':name’s ex-girlfriend',

    'relationship_type_parent' => 'أب',
    'relationship_type_parent_female' => 'أم',
    'relationship_type_parent_with_name' => 'والد :name',
    'relationship_type_parent_female_with_name' => 'والدة :name',

    'relationship_type_child' => 'ابن',
    'relationship_type_child_female' => 'ابنة',
    'relationship_type_child_with_name' => 'ابن :name',
    'relationship_type_child_female_with_name' => 'ابنة :name',

    'relationship_type_sibling' => 'أخ',
    'relationship_type_sibling_female' => 'أخت',
    'relationship_type_sibling_with_name' => 'شقيق :name',
    'relationship_type_sibling_female_with_name' => 'شقيقة :name',

    'relationship_type_grandparent' => 'جد',
    'relationship_type_grandparent_female' => 'جدة',
    'relationship_type_grandparent_with_name' => 'جد :name',
    'relationship_type_grandparent_female_with_name' => 'جَدة :name',

    'relationship_type_grandchild' => 'حفيد',
    'relationship_type_grandchild_female' => 'حفيدة',
    'relationship_type_grandchild_with_name' => 'حفيد :name',
    'relationship_type_grandchild_female_with_name' => 'حفيدة :name',

    'relationship_type_uncle' => 'عم/خال',
    'relationship_type_uncle_female' => 'عمة/خالة',
    'relationship_type_uncle_with_name' => 'عم/خال :name',
    'relationship_type_uncle_female_with_name' => 'عمة/خالة :name',

    'relationship_type_nephew' => 'ابن شقيق',
    'relationship_type_nephew_female' => 'ابنة شقيقة',
    'relationship_type_nephew_with_name' => 'ابن شقيق :name',
    'relationship_type_nephew_female_with_name' => 'ابنة شقيقة :name',

    'relationship_type_cousin' => 'ابن عم/خال',
    'relationship_type_cousin_female' => 'ابنة عمة/خالة',
    'relationship_type_cousin_with_name' => 'ابن عم/خال :name',
    'relationship_type_cousin_female_with_name' => 'ابنة عمة/خالة :name',

    'relationship_type_godfather' => 'godfather',
    'relationship_type_godfather_female' => 'godmother',
    'relationship_type_godfather_with_name' => ':name’s godfather',
    'relationship_type_godfather_female_with_name' => ':name’s godmother',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_with_name' => ':name’s godson',
    'relationship_type_godson_female_with_name' => ':name’s goddaughter',

    'relationship_type_friend' => 'صديق',
    'relationship_type_friend_female' => 'صديقة',
    'relationship_type_friend_with_name' => 'صديق :name',
    'relationship_type_friend_female_with_name' => 'صديقة :name',

    'relationship_type_bestfriend' => 'الصديق المفضل',
    'relationship_type_bestfriend_female' => 'الصديقة المفضلة',
    'relationship_type_bestfriend_with_name' => 'صديق :name المفضل',
    'relationship_type_bestfriend_female_with_name' => 'صديقة :name المفضلة',

    'relationship_type_colleague' => 'زميل',
    'relationship_type_colleague_female' => 'زميلة',
    'relationship_type_colleague_with_name' => 'زميل :name',
    'relationship_type_colleague_female_with_name' => 'زميلة :name',

    'relationship_type_boss' => 'مدير',
    'relationship_type_boss_female' => 'مديرة',
    'relationship_type_boss_with_name' => 'مدير :name',
    'relationship_type_boss_female_with_name' => 'مديرة :name',

    'relationship_type_subordinate' => 'مرؤوس',
    'relationship_type_subordinate_female' => 'مرؤوسة',
    'relationship_type_subordinate_with_name' => 'مرؤوس :name',
    'relationship_type_subordinate_female_with_name' => 'مرؤوسة :name',

    'relationship_type_mentor' => 'مرشد',
    'relationship_type_mentor_female' => 'مرشدة',
    'relationship_type_mentor_with_name' => 'مرشد :name',
    'relationship_type_mentor_female_with_name' => 'مرشدة :name',

    'relationship_type_protege' => 'متدرب',
    'relationship_type_protege_female' => 'متدربة',
    'relationship_type_protege_with_name' => 'متدرب :name',
    'relationship_type_protege_female_with_name' => 'متدربة :name',

    'relationship_type_ex_husband' => 'طليق',
    'relationship_type_ex_husband_female' => 'طليقة',
    'relationship_type_ex_husband_with_name' => 'زوج :name السابق',
    'relationship_type_ex_husband_female_with_name' => 'زوجة :name السابقة',
];
