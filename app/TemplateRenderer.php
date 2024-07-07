<?php

namespace App;

class TemplateRenderer {
    protected $template;

    public function __construct($template) {
        $this->template = $template;
    }

    public function render($data = []) {
        // Replace custom directives
        $template = $this->replaceDirectives($this->template);

        // Extract variables from $data array
        extract($data);

        // Execute the PHP code and capture output
        ob_start();
        eval('?>' . $template);
        $output = ob_get_clean();

        return $output;
    }

    protected function replaceDirectives($template) {
        // Define custom directives and their replacements
        $directives = [
            '/@if\((.*?)\)/' => '<?php if($1): ?>',
            '/@else/' => '<?php else: ?>',
            '/@elseif\((.*?)\)/' => '<?php elseif($1): ?>',
            '/@endif/' => '<?php endif; ?>',
        ];

        // Replace directives in the template
        foreach ($directives as $pattern => $replacement) {
            $template = preg_replace($pattern, $replacement, $template);
        }

        return $template;
    }
}




?>