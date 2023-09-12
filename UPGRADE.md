# Upgrade

## From 1.x to 2.x
       
The `Sidebar::make()` method's signature was changed. Previously it accepted a `$form` parameter and returned a form. Now you can just use the `Sidebar::make()` method inside any form schema:
 
```diff
-public static function form(Form $form): Form
-{
-    return Sidebar::make($form)->schema([
-        // Main components
-    ], [
-        // Sidebar components
-    ]);
-}
+public static function form(Form $form): Form
+{
+    return $form->schema([
+        Sidebar::make([
+            // Main components
+        ], [
+            // Sidebar components
+        ]),
+   ]);
+}
