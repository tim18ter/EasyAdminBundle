<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Dto;

final class CrudPageDto
{
    private $name;
    private $title;
    private $help;
    private $actions;
    private $disabledActions;
    private $showEntityActionsAsDropdown;
    private $defaultSort = [];
    private $permission;
    private $entityPermission;
    private $searchFields;
    private $filters;
    private $paginatorDto;
    private $formOptions = [];
    private $showSaveAndExitButton;
    private $showSaveAndContinueButton;
    private $showSaveAndAddAnotherButton;

    public static function newFromIndexPage(string $name, ?string $title, ?string $help, array $defaultSort, ?string $permission, ?string $entityViewPermission, ?array $searchFields, ?array $actions, array $disabledActions, bool $showEntityActionsAsDropdown, ?array $filters, PaginatorDto $paginatorDto): self
    {
        $context = new self();

        $context->name = $name;
        $context->title = $title;
        $context->help = $help;
        $context->defaultSort = $defaultSort;
        $context->permission = $permission;
        $context->entityPermission = $entityViewPermission;
        $context->searchFields = $searchFields;
        $context->actions = $actions;
        $context->disabledActions = $disabledActions;
        $context->showEntityActionsAsDropdown = $showEntityActionsAsDropdown;
        $context->filters = $filters;
        $context->paginatorDto = $paginatorDto;

        return $context;
    }

    public static function newFromDetailPage(string $pageName, ?string $title, ?string $help, ?string $permission, ?string $entityViewPermission, array $actions): self
    {
        $context = new self();

        $context->name = $pageName;
        $context->title = $title;
        $context->help = $help;
        $context->permission = $permission;
        $context->entityPermission = $entityViewPermission;
        $context->actions = $actions;
        $context->disabledActions = $disabledActions;

        return $context;
    }

    public static function newFromFormPage(string $pageName, ?string $title, ?string $help, ?string $permission, array $formOptions, bool $showSaveAndExitButton, bool $showSaveAndContinueButton, bool $showSaveAndAddAnotherButton, ?array $actions, array $disabledActions): self
    {
        $context = new self();

        $context->name = $pageName;
        $context->title = $title;
        $context->help = $help;
        $context->permission = $permission;
        $context->formOptions = $formOptions;
        $context->actions = $actions;
        $context->disabledActions = $disabledActions;
        $context->showSaveAndExitButton = $showSaveAndExitButton;
        $context->showSaveAndContinueButton = $showSaveAndContinueButton;
        $context->showSaveAndAddAnotherButton = $showSaveAndAddAnotherButton;

        return $context;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getHelp(): ?string
    {
        return $this->help;
    }

    public function getActions(): ?array
    {
        return $this->actions;
    }

    public function getDisabledActions(): array
    {
        return $this->disabledActions;
    }

    public function showEntityActionsAsDropdown(): bool
    {
        return $this->showEntityActionsAsDropdown;
    }

    public function getDefaultSort(): array
    {
        return $this->defaultSort;
    }

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function getEntityPermission(): ?string
    {
        return $this->entityPermission;
    }

    public function getSearchFields(): ?array
    {
        return $this->searchFields;
    }

    public function isSearchEnabled(): bool
    {
        return null !== $this->searchFields;
    }

    public function getFilters(): ?array
    {
        return $this->filters;
    }

    public function isFilterEnabled(): bool
    {
        return null !== $this->filters;
    }

    public function getPaginator(): PaginatorDto
    {
        return $this->paginatorDto;
    }

    public function getFormOptions(): ?array
    {
        return $this->formOptions;
    }

    public function showSaveAndExitButton(): bool
    {
        return $this->showSaveAndExitButton;
    }

    public function showSaveAndContinueButton(): bool
    {
        return $this->showSaveAndContinueButton;
    }

    public function showSaveAndAddAnotherButton(): bool
    {
        return $this->showSaveAndAddAnotherButton;
    }
}
