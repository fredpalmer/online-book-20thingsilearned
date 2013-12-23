package com.fi.twentythings;

import com.googlecode.objectify.annotation.Entity;
import com.googlecode.objectify.annotation.Id;
import com.googlecode.objectify.annotation.Ignore;
import com.googlecode.objectify.annotation.Index;


/**
 * Copyright 2011 Google Inc. This program is free software; you can
 * redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either version 2 of the
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * 
 * @author jonathan.gray The Article contains the data for each topic covered in
 *         the 20 things application. An article contains one or more Pages.
 *         Article information can me modified via the CMS (see:
 *         cmseditarticle.php)
 */
@Entity
public class Article {
	@Id	String id;
	@Index String active;
	@Index String locale;
	String numberOfPages;
	@Index String stub;
	String subtitle;
	String title;
	@Index int order;
	@Index String hidden;

	@Ignore
	String doNotPersist;

	@SuppressWarnings("unused")
	private Article() {
	}

	public Article(String id, String active, String locale,
			String numberOfPages, String stub, String subtitle, String title,
			int order, String hidden) {
		this.id = id;
		this.active = active;
		this.locale = locale;
		this.numberOfPages = numberOfPages;
		this.stub = stub;
		this.subtitle = subtitle;
		this.title = title;
		this.order = order;
		this.hidden = hidden;
	}

	public String getHidden() {
		return hidden;
	}

	public void setHidden(String hidden) {
		this.hidden = hidden;
	}

	public int getOrder() {
		return order;
	}

	public void setOrder(int order) {
		this.order = order;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getNumberOfPages() {
		return numberOfPages;
	}

	public void setNumberOfPages(String numberOfPages) {
		this.numberOfPages = numberOfPages;
	}

	public String getActive() {
		return active;
	}

	public void setActive(String active) {
		this.active = active;
	}

	public String getLocale() {
		return locale;
	}

	public void setLocale(String locale) {
		this.locale = locale;
	}

	public String getStub() {
		return stub;
	}

	public void setStub(String stub) {
		this.stub = stub;
	}

	public String getSubtitle() {
		return subtitle;
	}

	public void setSubtitle(String subtitle) {
		this.subtitle = subtitle;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

}
