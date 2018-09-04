<?php
$module_name = 'm_CAMS';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
            1 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'community',
                'label' => 'LBL_COMMUNITY',
              ),
              1 => 
              array (
                'name' => 'phase',
                'label' => 'LBL_PHASE',
              ),
              2 => 
              array (
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'job_number',
                'label' => 'LBL_JOB_NUMBER',
              ),
              4 => 
              array (
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'floor_plan',
                'label' => 'LBL_FLOOR_PLAN',
              ),
              6 => 
              array (
                'name' => 'elevation',
                'label' => 'LBL_ELEVATION',
              ),
              7 => 
              array (
                'name' => 'square_footage',
                'label' => 'LBL_SQUARE_FOOTAGE',
              ),
              8 => 
              array (
                'name' => 'garage_type',
                'label' => 'LBL_GARAGE_TYPE',
              ),
              9 => 
              array (
                'name' => 'primary_address_street',
                'comment' => 'The street address used for for primary purposes',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
              ),
              10 => 
              array (
                'name' => 'primary_address_city',
                'comment' => 'The city used for the primary address',
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
              ),
              11 => 
              array (
                'name' => 'm_cams_opportunities_1_name',
                'label' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
              ),
              12 => 
              array (
                'name' => 'contract_price',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_CONTRACT_PRICE',
              ),
              13 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_SALES_STAGE',
              ),
              14 => 
              array (
                'name' => 'closing_date',
                'label' => 'LBL_CLOSING_DATE',
              ),
              15 => 
              array (
                'name' => 'sale_type',
                'label' => 'LBL_SALE_TYPE',
              ),
              16 => 
              array (
                'name' => 'warranty_exp',
                'label' => 'LBL_WARRANTY_EXP',
              ),
              17 => 
              array (
                'name' => 'pending_date',
                'label' => 'LBL_PENDING_DATE',
              ),
              18 => 
              array (
                'name' => 'lender',
                'label' => 'LBL_LENDER',
              ),
              19 => 
              array (
                'name' => 'budget_created',
                'label' => 'LBL_BUDGET_CREATED',
              ),
              20 => 
              array (
                'name' => 'loan_status',
                'label' => 'LBL_LOAN_STATUS',
              ),
              21 => 
              array (
                'name' => 'loan_max',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_LOAN_MAX',
              ),
              22 => 
              array (
                'name' => 'loan_closed_date',
                'label' => 'LBL_LOAN_CLOSED_DATE',
              ),
              23 => 
              array (
                'name' => 'loan_balance_current',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_LOAN_BALANCE_CURRENT',
              ),
              24 => 
              array (
                'name' => 'loan_number',
                'label' => 'LBL_LOAN_NUMBER',
              ),
              25 => 
              array (
                'name' => 'loan_balance_remaining',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_LOAN_BALANCE_REMAINING',
              ),
              26 => 
              array (
                'name' => 'loan_comment',
                'studio' => 'visible',
                'label' => 'LBL_LOAN_COMMENT',
              ),
              27 => 
              array (
                'name' => 'loan_maturity_date',
                'label' => 'LBL_LOAN_MATURITY_DATE',
              ),
              28 => 
              array (
                'name' => 'construction_stage',
                'label' => 'LBL_CONSTRUCTION_STAGE',
              ),
              29 => 
              array (
                'name' => 'superintendent',
                'label' => 'LBL_SUPERINTENDENT',
              ),
              30 => 
              array (
                'name' => 'const_finish_date',
                'label' => 'LBL_CONST_FINISH_DATE',
              ),
              31 => 
              array (
                'name' => 'total_build_days',
                'label' => 'LBL_TOTAL_BUILD_DAYS',
              ),
              32 => 
              array (
                'name' => 'mgr_walk_close_days',
                'label' => 'LBL_MGR_WALK_CLOSE_DAYS',
              ),
              33 => 
              array (
                'name' => 'permit_number',
                'label' => 'LBL_PERMIT_NUMBER',
              ),
              34 => 
              array (
                'name' => 'permit_upload_date',
                'label' => 'LBL_PERMIT_UPLOAD_DATE',
              ),
              35 => 
              array (
                'name' => 'permits_paid_date',
                'label' => 'LBL_PERMITS_PAID_DATE',
              ),
              36 => 
              array (
                'span' => 12,
              ),
              37 => 
              array (
                'name' => 'permit_issued_date',
                'label' => 'LBL_PERMIT_ISSUED_DATE',
              ),
              38 => 
              array (
                'name' => 'permit_total_days',
                'label' => 'LBL_PERMIT_TOTAL_DAYS',
              ),
              39 => 
              array (
                'name' => 'permit_status_note',
                'studio' => 'visible',
                'label' => 'LBL_PERMIT_STATUS_NOTE',
              ),
              40 => 
              array (
                'name' => 'projected_start_date',
                'label' => 'LBL_PROJECTED_START_DATE',
              ),
              41 => 
              array (
                'name' => 'projected_close_date',
                'label' => 'LBL_PROJECTED_CLOSE_DATE',
              ),
              42 => 
              array (
                'name' => 'lot_purchase_opportunity',
                'studio' => 'visible',
                'label' => 'LBL_LOT_PURCHASE_OPPORTUNITY',
              ),
              43 => 
              array (
                'name' => 'lot_purchase_addendum',
                'studio' => 'visible',
                'label' => 'LBL_LOT_PURCHASE_ADDENDUM',
              ),
              44 => 
              array (
                'name' => 'lot_inventory_note',
                'studio' => 'visible',
                'label' => 'LBL_LOT_INVENTORY_NOTE',
              ),
              45 => 
              array (
                'name' => 'books_closed',
                'label' => 'LBL_BOOKS_CLOSED',
              ),
              46 => 
              array (
                'name' => 'cost_variance_budget',
                'label' => 'LBL_COST_VARIANCE_BUDGET',
              ),
              47 => 
              array (
                'name' => 'gross_margin',
                'label' => 'LBL_GROSS_MARGIN',
              ),
              48 => 
              array (
                'name' => 'actual_hard_lot_costs',
                'label' => 'LBL_ACTUAL_HARD_LOT_COSTS',
              ),
              49 => 
              array (
                'name' => 'actual_hard_costs',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_ACTUAL_HARD_COSTS',
              ),
              50 => 
              array (
                'name' => 'hard_cost_per_sales',
                'label' => 'LBL_HARD_COST_PER_SALES',
              ),
              51 => 
              array (
                'name' => 'actual_lot_cost',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_ACTUAL_LOT_COST',
              ),
              52 => 
              array (
                'name' => 'lot_cost_percent',
                'label' => 'LBL_LOT_COST_PERCENT',
              ),
              53 => 
              array (
                'name' => 'spec_dom',
                'label' => 'LBL_SPEC_DOM',
              ),
              54 => 
              array (
                'name' => 'estimate_errors',
                'label' => 'LBL_ESTIMATE_ERRORS',
              ),
              55 => 
              array (
                'name' => 'job_cost_margin_notes',
                'studio' => 'visible',
                'label' => 'LBL_JOB_COST_MARGIN_NOTES',
              ),
              56 => 
              array (
                'name' => 'gcpf',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_GCPF',
              ),
              57 => 
              array (
                'name' => 'price_per_foot',
                'label' => 'LBL_PRICE_PER_FOOT',
              ),
              58 => 'assigned_user_name',
              59 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              60 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              61 => 
              array (
                'name' => 'last_activity_time',
                'label' => 'LBL_LAST_ACTIVITY_TIME',
              ),
              62 => 'team_name',
              63 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
