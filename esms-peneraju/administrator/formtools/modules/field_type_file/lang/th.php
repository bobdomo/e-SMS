<?php

$L = array();
$L["module_name"] = "อัปโหลดไฟล์";

$L["confirm_delete_submission_files"] = "คุณแน่ใจหรือว่าต้องการลบไฟล์เหล่านี้?";
$L["module_description"] = "โมดูลนี้มีฟิลด์การอัปโหลดไฟล์อย่างง่ายสำหรับใช้ในฟิลด์เครื่องมือแบบฟอร์ม";
$L["notify_file_deleted"] = "ไฟล์ถูกลบ";
$L["notify_file_too_large"] = "ไฟล์ <b>{\$filename}</b> ใหญ่เกินไป ไฟล์นี้คือ {\$file_size} KB แต่ขนาดไฟล์สูงสุดที่อนุญาตคือ {\$max_file_size} KB";
$L["notify_files_deleted"] = "ไฟล์ถูกลบแล้ว";
$L["notify_files_too_large"] = "ไฟล์ต่อไปนี้มีขนาดใหญ่เกินไป: <b>{\$file_list}</b>";
$L["notify_submission_no_field_id"] = "ไม่พบ ID ฟิลด์ของการส่งนี้";
$L["notify_file_not_deleted_invalid_permissions"] = "ไม่สามารถลบไฟล์ <b>{\$filename}</b> ในโฟลเดอร์ <b>{\$folder}</b> ได้เนื่องจากไม่มีสิทธิ์ที่เหมาะสม";
$L["notify_files_not_deleted_invalid_permissions"] = "ไม่สามารถลบไฟล์ต่อไปนี้ได้เนื่องจากไม่มีสิทธิ์ที่เหมาะสม: <b>{\$file_list}</b>";
$L["notify_file_not_deleted_unknown_error"] = "ไม่สามารถลบไฟล์ <b>{\$filename}</b> ในโฟลเดอร์ <b>{\$folder}</b> เนื่องจากข้อผิดพลาดที่ไม่ทราบสาเหตุ";
$L["notify_files_not_deleted_unknown_errors"] = "ไม่สามารถลบไฟล์ต่อไปนี้เนื่องจากข้อผิดพลาดที่ไม่รู้จัก: <b>{\$file_list}</b>";
$L["notify_clear_error"] = "<a href=\"#\" onclick=\"{\$js_link}\">คลิกที่นี่</a> เพื่อละเว้นข้อความแสดงข้อผิดพลาดและเพียงลบการอ้างอิงออกจากฐานข้อมูล";
$L["notify_clear_errors"] = "<a href=\"#\" onclick=\"{$js_link}\">คลิกที่นี่</a> เพื่อละเว้นข้อความแสดงข้อผิดพลาดเหล่านี้และเพียงลบการอ้างอิงออกจากฐานข้อมูล";
$L["notify_file_deleted_with_error"] = "ไฟล์ <b>1</b> ถูกลบสำเร็จแล้ว แต่เกิดข้อผิดพลาดต่อไปนี้";
$L["notify_files_deleted_with_error"] = "<b>{\$num_files}</b> ไฟล์ถูกลบสำเร็จ แต่มีข้อผิดพลาดเกิดขึ้น";
$L["notify_field_type_reset"] = "ประเภทเขตข้อมูลถูกรีเซ็ต";
$L["notify_submission_updated_file_problems"] = "การส่งของคุณได้รับการอัปเดต แต่เราพบปัญหา:";
$L["notify_upload_invalid_file_extension"] = "ไฟล์ที่กำลังอัปโหลดมีนามสกุลไฟล์ที่ไม่รองรับ";
$L["notify_file_not_deleted_missing"] = "ไฟล์ <b>{\$file}</b> ยังไม่ถูกลบเนื่องจากไม่มีอยู่ในโฟลเดอร์ที่คาดหวัง (<b>{\$folder}</b>)";
$L["notify_files_not_deleted_missing"] = "ไฟล์ต่อไปนี้ยังไม่ถูกลบเนื่องจากไม่มีอยู่ในโฟลเดอร์ที่คาดหวัง (<b>{\$folder}</b>): <b>{\$file_list}</b>";
$L["notify_upload_invalid_file_extensions"] = "ไฟล์ต่อไปนี้มีนามสกุลไฟล์ที่ไม่รองรับสำหรับฟิลด์: <b>{\$file_list}</b>";
$L["notify_unable_to_copy_file_to_target_folder"] = "ไม่สามารถคัดลอกไฟล์ต่อไปนี้ไปยังโฟลเดอร์เป้าหมายจากตำแหน่งการอัปโหลดชั่วคราว: <b>{\$file_list}</b>";
$L["notify_num_files_deleted_with_problems"] = "<b>{\$num_deleted}</b> ไฟล์ถูกลบ แต่เราพบปัญหาต่อไปนี้:";
$L["notify_file_missing_from_folder"] = "ไม่พบไฟล์ <b>{\$filename}</b> ในโฟลเดอร์: <b>{\$folder}</b>";
$L["notify_files_missing"] = "ไม่พบไฟล์เหล่านี้: <b>{\$file_list}</b>";
$L["notify_file_incorrect_permissions"] = "ไฟล์ <b>{\$filename}</b> ในโฟลเดอร์ <b>{\$folder}</b> ไม่มีสิทธิ์ในการใช้ไฟล์ที่ถูกต้อง";
$L["notify_files_incorrect_permissions"] = "ไม่สามารถลบไฟล์เหล่านี้เนื่องจากการอนุญาตไฟล์: <b>{\$file_list}</b>";
$L["notify_file_unknown_reasons"] = "ไม่สามารถลบไฟล์ <b>{\$filename}</b> ในโฟลเดอร์ <b>{\$folder}</b> ได้โดยไม่ทราบสาเหตุ";
$L["notify_files_unknown_reasons"] = "ไม่สามารถลบไฟล์เหล่านี้เนื่องจากสาเหตุที่ไม่รู้จัก: <b>{\$file_list}</b>";
$L["phrase_reset_field_type"] = "รีเซ็ตประเภทฟิลด์";
$L["phrase_no_files_to_delete"] = "ไม่มีไฟล์ที่จะลบ";
$L["text_help"] = "สำหรับข้อมูลเพิ่มเติมเกี่ยวกับโมดูลนี้โปรดดู <a href=\"https://modules.formtools.org/field_type_tinymce/\" target=\"_blank\">เอกสารช่วยเหลือ</a> บนไซต์เครื่องมือแบบฟอร์ม";
$L["text_reset_field_type_desc"] = "ปุ่มด้านล่างนี้ช่วยให้คุณสามารถรีเซ็ตประเภทของฟิลด์นี้เป็นค่าเริ่มต้นจากโรงงาน โดยทั่วไปคุณไม่จำเป็นต้องทำสิ่งนี้ แต่ในกรณีของการอัพเกรดล้มเหลวนี่เป็นวิธีที่ไม่ปลอดภัยเพื่อให้แน่ใจว่าเป็นรุ่นล่าสุด";
$L["text_intro_desc"] = "ใช้ <a href=\"{\$link}\">การตั้งค่า & raquo; หน้าไฟล์</a> เพื่อกำหนดการตั้งค่าการอัปโหลดไฟล์เริ่มต้น คุณสามารถแทนที่การตั้งค่าเหล่านั้นได้โดยแก้ไขช่องฟอร์มใด ๆ ผ่านทางแก้ไขฟอร์ม & raquo; แท็บฟิลด์";
$L["word_help"] = "ช่วยด้วย";
