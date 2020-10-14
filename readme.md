# Rector bug

```
composer install
vendor/bin/rector process src --dry-run

$ vendor/bin/rector process src --dry-run
Rector 0.8.22
Config file: rector.php

 4/4 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

1 file with changes
===================

1) src/Entity.php

    ---------- begin diff ----------
--- Original
+++ New
@@ -4,13 +4,11 @@

 namespace MyNamespace;

-use Carbon\Carbon;
-
+use Carbon;
 class Entity
 {
     private Carbon $createdAt;
-
-    public function __construct()
+    public function __construct()
     {
         $this->createdAt = Carbon::now();
     }
    ----------- end diff -----------



 [ERROR] Could not process "src/Entity.php" file, due to:
         "_HumbugBox62432a48370e\Roave\BetterReflection\Reflection\ReflectionClass "Carbon\Traits\Localization" could
         not be found in the located source".

```