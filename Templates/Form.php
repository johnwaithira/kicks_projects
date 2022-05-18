<?php
    
    namespace Waithira\Kicksfootware\Templates;
    use Waithira\Kicksfootware\Templates\Fields;
    
    class Form
    {
        public static function begin($action, $method, $params = []): Form
        {
            echo sprintf('<form  action="%s" method = "%s" class=" p-10 m-t-20" %s enctype="multipart/form-data">',
            $action, $method, $params);
            return new Form();
        }
        public static function end()
        {
            echo "
            <script>
                if(window.history.replaceState)
                {
                    window.history.replaceState(null, null, window.location.href)
                }
            
            </script>
            </form>";
        }
    
        public static function field($attribute): Fields
        {
            return new Fields($attribute);
        }
    }