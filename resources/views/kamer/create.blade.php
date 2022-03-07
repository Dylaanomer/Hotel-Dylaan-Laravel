@extends('layouts.app')

<h1>Create</h1>

<h4>VakItem</h4>
<hr />
<div class="row">
    <div class="col-md-4">
        <form asp-action="Create">
            <div asp-validation-summary="ModelOnly" class="text-danger"></div>
            <div class="form-group">
                <label asp-for="Naam" class="control-label"></label>
                <input asp-for="Naam" class="form-control" />
                <span asp-validation-for="Naam" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label asp-for="Type" class="control-label"></label>
                <input asp-for="Type" class="form-control" />
                <span asp-validation-for="Type" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label asp-for="Land" class="control-label"></label>
                <input asp-for="Land" class="form-control" />
                <span asp-validation-for="Land" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label asp-for="InvoerId" class="control-label"></label>
                <select asp-for="InvoerId" class ="form-control" asp-items="ViewBag.InvoerId"></select>
            </div>
            <div class="form-group">
                <label asp-for="RijId" class="control-label"></label>
                <select asp-for="RijId" class ="form-control" asp-items="ViewBag.RijId"></select>
            </div>
            <div class="form-group">
                <label asp-for="RijSetId" class="control-label"></label>
                <select asp-for="RijSetId" class ="form-control" asp-items="ViewBag.RijSetId"></select>
            </div>
            <div class="form-group">
                <label asp-for="AfdelingId" class="control-label"></label>
                <select asp-for="AfdelingId" class ="form-control" asp-items="ViewBag.AfdelingId"></select>
            </div>
            <div class="form-group">
                <input type="submit" value="Create" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a asp-action="Index">Back to List</a>
</div>
