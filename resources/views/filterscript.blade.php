    <script>
        (function() {
            if (!window.getFilterData) {
                window.getFilterData = function() {
                    return {
                        color: {"white":{"label":"white"},"brown":{"label":"brown"},"black":{"label":"black"},"navy blue":{"label":"navy blue"},"blue":{"label":"blue"},"gray":{"label":"gray"},"green":{"label":"green"},"yellow":{"label":"yellow"}},
                        feature: {"kamizelka":{"label":"kamizelka"},"kurtka":{"label":"kurtka"},"marynarka":{"label":"marynarka"},"parka":{"label":"parka"},"sportowa":{"label":"sportowa"},"z-kapturem":{"label":"z kapturem"}},
                        size: {"xs":{"label":"XS"},"s":{"label":"S"},"m":{"label":"M"},"l":{"label":"L"},"xl":{"label":"XL"},"xxl":{"label":"XXL"}},
                        range: {
                            min: {
                                label: 'min',
                                value: 500,
                                products: []
                            },
                            max: {
                                label: 'max',
                                value: 10000,
                                products: []
                            }
                        }
                    };
                }
            }
        })();
    </script>